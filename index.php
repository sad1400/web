<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Лабораторные работы — Архитектура КИС</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #eef2f3, #ffffff);
      color: #2ef0b5;
    }

    header {
      background-color: #2ef0b5;
      color: white;
      text-align: center;
      padding: 40px 20px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    header h1 {
      margin: 0;
      font-size: 2rem;
    }

    .content {
      max-width: 1000px;
      margin: 50px auto;
      padding: 0 20px;
    }

    .lab-list {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .lab-list a {
      display: block;
      padding: 20px 25px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      font-size: 1.1rem;
      background: white;
      color: #2c3e50;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
      transition: all 0.25s ease-in-out;
    }

    .lab-list a:hover {
      background-color: #e67e22;
      color: white;
      transform: translateY(-2px);
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
    <h1>Лабораторные работы по проектированию архитектуры КИС</h1>
  </header>

  <div class="content">
    <div class="lab-list">
      <a href="lab1.php">Лабораторная работа №1 — Классы и интерфейсы</a>
      <a href="lab2.php">Лабораторная работа №2 — Паттерны проектирования</a>
      <a href="lab3.php">Лабораторная работа №3 — MVC</a>
      <a href="lab4.php">Лабораторная работа №4 — ООП и SQLite</a>
      <a href="lab5.php">Лабораторная работа №5 — ORM и миграции</a>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Лабораторные работы по Проектированию архитектуры корпоративных информационных систем</p>
  </footer>
</body>
</html>
