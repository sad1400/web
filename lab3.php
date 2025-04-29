<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Лабораторная работа № 3 — Паттерны проектирования</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      color: #2ef0b5;
    }

    header {
      background-color: #2ef0b5;
      color: white;
      text-align: center;
      padding: 40px 20px;
    }

    header h1 {
      margin: 0;
      font-size: 2rem;
    }

    .content {
      max-width: 900px;
      margin: 30px auto;
      padding: 30px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    h2.section-title {
      margin-top: 30px;
      color: #35424a;
      border-bottom: 2px solid #ccc;
      padding-bottom: 6px;
      font-size: 1.3rem;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    ul li {
      margin: 10px 0;
    }

    ul li a {
      display: block;
      background: #eef1f4;
      padding: 12px 18px;
      border-radius: 6px;
      text-decoration: none;
      color: #2ef0b5;
      font-weight: 600;
      transition: background 0.3s, transform 0.2s;
    }

    ul li a:hover {
      background-color: #35424a;
      color: white;
      transform: translateX(5px);
    }

    .back-link {
      display: inline-block;
      margin-top: 30px;
      font-weight: bold;
      text-decoration: none;
      color: #35424a;
      transition: color 0.2s;
    }

    .back-link:hover {
      color: #e8491d;
    }

    footer {
      background-color: #2ef0b5;
      color: white;
      text-align: center;
      padding: 20px;
      font-size: 0.9rem;
      margin-top: 60px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Лабораторная работа № 3 — Паттерны проектирования</h1>
  </header>

  <div class="content">
    <h2 class="section-title">Одиночка (Singleton)</h2>
    <ul>
      <li><a href="lab3/settings_use.php">Пример применения одиночки</a></li>
    </ul>

    <h2 class="section-title">Фабричный метод (Factory Method)</h2>
    <ul>
      <li><a href="lab3/factory_use.php">Пример фабричного метода</a></li>
      <li><a href="lab3/diagramma_FactoryMethod.php">Диаграмма фабричного метода</a></li>
    </ul>

    <h2 class="section-title">Модель-Представление-Контроллер (MVC)</h2>
    <ul>
      <li><a href="lab3/mvc_use.php">Пример MVC</a></li>
      <li><a href="lab3/diagramma_MVC.php">Диаграмма MVC</a></li>
    </ul>

    <a class="back-link" href="index.php">← Назад в главное меню</a>
  </div>

  <footer>
    <p>&copy; 2025 Лабораторная работа № 3</p>
  </footer>
</body>
</html>
