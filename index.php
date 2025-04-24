
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Лабораторные работы</title>
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
      max-width: 900px;
      margin: 40px auto;
      padding: 0 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .card {
      background: white;
      padding: 20px 25px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 24px rgba(0, 0, 0, 0.15);
    }

    .card a {
      text-decoration: none;
      font-size: 1.1rem;
      color: #2c3e50;
      font-weight: 600;
      display: block;
    }

    .card a:hover {
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

    @media (max-width: 600px) {
      .card {
        padding: 15px 20px;
      }

      .card a {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Лабораторные работы</h1>
  </header>

  <div class="content">
    <div class="card"><a href="Users.php">Лабораторная работа №1</a></div>
    <div class="card"><a href="lab2.php">Лабораторная работа №2</a></div>
    <div class="card"><a href="lab3.php">Лабораторная работа №3</a></div>
    <div class="card"><a href="lab4.php">Лабораторная работа №4</a></div>
    <div class="card"><a href="lab5.php">Лабораторная работа №5</a></div>
  </div>
  <footer>
    <p>&copy; 2025 Лабораторные работы</p>
  </footer>

</body>
</html>
