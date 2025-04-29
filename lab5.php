<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Лабораторная №5 — Standard PHP Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }

        header {
            background-color: #2ef0b5;
            color: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        .content {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        }

        h2 {
            font-size: 1.5rem;
            color: #35424a;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 15px;
        }

        ul li a {
            display: block;
            padding: 12px 18px;
            background-color: #eef1f4;
            border-radius: 6px;
            color: #2c3e50;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        ul li a:hover {
            background-color: #35424a;
            color: #fff;
            transform: translateX(5px);
        }

        .back-link {
            display: inline-block;
            margin-top: 30px;
            font-weight: bold;
            color: #35424a;
            text-decoration: none;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: #e8491d;
        }

        footer {
            margin-top: 50px;
            background-color: #2ef0b5;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Лабораторная работа №5 — Standard PHP Library</h1>
    </header>

    <main class="content">
        <h2>Содержание</h2>
        <ul>
            <li><a href="task1.php">Задание 1: NumbersSquared</a></li>
            <li><a href="task1diagrama.php">Диаграмма NumbersSquared</a></li>
            <li><a href="task2.php">Задание 2: NewsDB (IteratorAggregate)</a></li>
            <li><a href="task2diagrama.php">Диаграмма NewsDB (IteratorAggregate)</a></li>
        </ul>
        <a class="back-link" href="index.php">← Назад в главное меню</a>
    </main>

    <footer>
        <p>&copy; 2025 Лабораторная работа №5</p>
    </footer>
</body>
</html>
