<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <title>Лабораторная №5 — Standard PHP Library</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      color: #2c3e50;
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

    h2 {
      color: #35424a;
      margin-bottom: 10px;
      font-size: 1.4rem;
      border-bottom: 2px solid #ccc;
      padding-bottom: 6px;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    ul li {
      margin: 12px 0;
    }

    ul li a {
      display: block;
      background: #eef1f4;
      padding: 12px 18px;
      border-radius: 6px;
      text-decoration: none;
      color: #2c3e50;
      font-weight: 600;
      transition: background 0.3s, transform 0.2s;
    }

    ul li a:hover {
      background-color: #2ef0b5;
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
    <h1>Лабораторная работа №5 — Standard PHP Library</h1>
  </header>

  <div class="content">
    <h2>Содержание</h2>
    <ul>
      <li><a href="task1.php">Задание 1: NumbersSquared</a></li>
      <li><a href="task1diagrama.php">Диаграмма NumbersSquared</a></li>
      <li><a href="task2.php">Задание 2: NewsDB (IteratorAggregate)</a></li>
      <li><a href="task2diagrama.php">Диаграмма NewsDB (IteratorAggregate)</a></li>
    </ul>

    <a class="back-link" href="index.php">← Назад в главное меню</a>
  </div>

  <footer>
    <p>&copy; 2025 Лабораторная работа № 5</p>
  </footer>
</body>
</html>
