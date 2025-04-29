<?php 
require_once 'INewsDB.class.php';

class NewsDB implements INewsDB, IteratorAggregate {
    const DB_NAME = 'news.db';
    private $_db;

    // Массив для хранения категорий
    private $items = [];

    public function __construct() {
        $dbExists = file_exists(self::DB_NAME);
        $this->_db = new SQLite3(self::DB_NAME);

        if (!$dbExists) {
            $this->_db->exec("CREATE TABLE msgs(
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                title TEXT,
                category INTEGER,
                description TEXT,
                source TEXT,
                datetime INTEGER
            )");

            $this->_db->exec("CREATE TABLE category(
                id INTEGER,
                name TEXT
            )");

            $this->_db->exec("INSERT INTO category(id, name)
                SELECT 1 as id, 'Политика' as name
                UNION SELECT 2 as id, 'Культура' as name
                UNION SELECT 3 as id, 'Спорт' as name
            ");
        }

        // Заполняем массив категорий при создании объекта
        $this->getCategories();
    }

    public function __destruct() {
        if ($this->_db) {
            $this->_db->close();
        }
    }

    protected function getDB() {
        return $this->_db;
    }

    public function saveNews($title, $category, $description, $source) {
        try {
            $dt = time();
            $stmt = $this->_db->prepare(
                "INSERT INTO msgs (title, category, description, source, datetime) 
                 VALUES (:title, :category, :description, :source, :datetime)"
            );
            $stmt->bindValue(':title', $title, SQLITE3_TEXT);
            $stmt->bindValue(':category', (int)$category, SQLITE3_INTEGER);
            $stmt->bindValue(':description', $description, SQLITE3_TEXT);
            $stmt->bindValue(':source', $source, SQLITE3_TEXT);
            $stmt->bindValue(':datetime', $dt, SQLITE3_INTEGER);

            $result = $stmt->execute();
            return $result !== false;
        } catch (Exception $e) {
            error_log('Exception: ' . $e->getMessage());
            return false;
        }
    }

    public function getNews() {
        try {
            $sql = "SELECT msgs.id as id, 
                           msgs.title as title, 
                           category.name as category, 
                           msgs.description as description, 
                           msgs.source as source, 
                           msgs.datetime as datetime
                    FROM msgs 
                    JOIN category ON category.id = msgs.category 
                    ORDER BY msgs.id DESC";
            $result = $this->_db->query($sql);
            if (!$result) {
                error_log('Ошибка выполнения запроса: ' . $this->_db->lastErrorMsg());
                return false;
            }
            $arr = array();
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $arr[] = $row;
            }
            return $arr;
        } catch (Exception $e) {
            error_log('Exception: ' . $e->getMessage());
            return false;
        }
    }

    public function deleteNews($id) {
        try {
            $stmt = $this->_db->prepare("DELETE FROM msgs WHERE id = :id");
            $stmt->bindValue(':id', (int)$id, SQLITE3_INTEGER);
            $result = $stmt->execute();
            return $result !== false;
        } catch (Exception $e) {
            error_log('Exception: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Метод заполняет массив items категориями из таблицы category
     */
    private function getCategories(): void {
        $result = $this->_db->query("SELECT id, name FROM category");
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $this->items[$row['id']] = $row['name'];
        }
    }

    /**
     * Возвращает итератор для массива items
     */
    public function getIterator(): Traversable {
        return new ArrayIterator($this->items);
    }
}
?>
