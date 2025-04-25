
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Лабораторная работа №3 — Паттерны проектирования</title>
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

    section {
      background: white;
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
    }

    section h2 {
      margin-top: 0;
      color: #2c3e50;
      border-bottom: 2px solid #ecf0f1;
      padding-bottom: 8px;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 15px;
    }

    ul li a {
      display: block;
      background-color: #f9f9f9;
      padding: 12px 15px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      color: #2c3e50;
      transition: all 0.2s ease-in-out;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }

    ul li a:hover {
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
    <h1>Лабораторная работа №3 — Паттерны проектирования</h1>
  </header>

  <div class="content">
    <section>
      <h2>Одиночка (Singleton)</h2>
      <ul>
        <li><a href="lab3/settings_use.php">Одиночка</a></li>
      </ul>
    </section>

    <section>
      <h2>Фабричный метод (Factory Method)</h2>
      <ul>
        <li><a href="lab3/factory_use.php">Фабричный метод</a></li>
        <li><a href="lab3/diagramma_FactoryMethod.php">Диаграмма Фабричного метода</a></li>
      </ul>
    </section>

    <section>
      <h2>Модель-Представление-Контроллер (MVC)</h2>
      <ul>
        <li><a href="lab3/mvc_use.php">MVC</a></li>
        <li><a href="lab3/diagramma_MVC.php">Диаграмма MVC</a></li>
      </ul>
    </section>

    <div class="back-link">
      <a href="index.php">← Назад в главное меню</a>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Лабораторная работа №3</p>
  </footer>
</body>
</html>
