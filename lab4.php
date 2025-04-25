
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Лабораторная работа №4 — ООП и SQLite</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #eef2f3, #ffffff);
      color: #333;
    }

    header {
      background-color: #3eb489;
      color: white;
      padding: 40px 20px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    header h1 {
      margin: 0;
      font-size: 2rem;
    }

    .content {
      max-width: 1000px;
      margin: 40px auto;
      padding: 0 20px;
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    .nav-section {
      background: white;
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .nav-section h2 {
      color: #2c3e50;
      margin-bottom: 20px;
    }

    .nav-links {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      padding: 0;
      list-style: none;
      margin: 0;
    }

    .nav-links li a {
      display: block;
      background-color: #f9f9f9;
      padding: 14px 22px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      color: #2c3e50;
      transition: all 0.2s ease-in-out;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }

    .nav-links li a:hover {
      background-color: #e74c3c;
      color: #fff;
      transform: translateY(-3px);
    }

    .back-link {
      text-align: center;
      margin-top: 10px;
    }

    .back-link a {
      font-weight: 600;
      color: #2c3e50;
      text-decoration: none;
      transition: color 0.2s;
    }

    .back-link a:hover {
      color: #e74c3c;
    }

    footer {
      background-color: #3eb489;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <header>
    <h1>Лабораторная работа №4 — Использование ООП с базой данных SQLite</h1>
  </header>

  <div class="content">
    <section class="nav-section">
      <h2>Навигация по проекту</h2>
      <ul class="nav-links">
        <li><a href="news1/news.php">Новости</a></li>
        <li><a href="news1/diagrama.php">Диаграмма</a></li>
      </ul>
    </section>

    <div class="back-link">
      <a href="index.php">← Назад в главное меню</a>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Лабораторная работа №4</p>
  </footer>
</body>
</html>
