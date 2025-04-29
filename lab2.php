<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Лабораторная работа № 2 — Паттерны проектирования</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      color: #35424a;
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
      margin-top: 30px;
      color: #2ef0b5;
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
      background-color: #35424a;
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
    <h1>Лабораторная работа № 2 — Паттерны проектирования</h1>
  </header>

  <div class="content">
    <h2>Порождающие паттерны</h2>
    <ul>
      <li><a href="lab2/Generating_patterns/FactoryMethod.php">1. Фабричный метод</a></li>
      <li><a href="lab2/Generating_patterns/AbstractFactory.php">2. Абстрактная фабрика</a></li>
      <li><a href="lab2/Generating_patterns/Builder.php">3. Строитель</a></li>
      <li><a href="lab2/Generating_patterns/Prototype.php">4. Прототип</a></li>
      <li><a href="lab2/Generating_patterns/Singleton.php">5. Одиночка</a></li>
    </ul>

    <h2>Структурные паттерны</h2>
    <ul>
      <li><a href="lab2/Structural_patterns/Adapter.php">1. Адаптер</a></li>
      <li><a href="lab2/Structural_patterns/Bridge.php">2. Мост</a></li>
      <li><a href="lab2/Structural_patterns/Composite.php">3. Компоновщик</a></li>
      <li><a href="lab2/Structural_patterns/Decorator.php">4. Декоратор</a></li>
      <li><a href="lab2/Structural_patterns/Facade.php">5. Фасад</a></li>
      <li><a href="lab2/Structural_patterns/Flyweight.php">6. Легковес</a></li>
      <li><a href="lab2/Structural_patterns/Proxy.php">7. Заместитель</a></li>
    </ul>

    <h2>Поведенческие паттерны</h2>
    <ul>
      <li><a href="lab2/Behavioral_patterns/ChainofResponsibility.php">1. Цепочка обязанностей</a></li>
      <li><a href="lab2/Behavioral_patterns/Command.php">2. Команда</a></li>
      <li><a href="lab2/Behavioral_patterns/Iterator.php">3. Итератор</a></li>
      <li><a href="lab2/Behavioral_patterns/Mediator.php">4. Посредник</a></li>
      <li><a href="lab2/Behavioral_patterns/Memento.php">5. Снимок</a></li>
      <li><a href="lab2/Behavioral_patterns/Observer.php">6. Наблюдатель</a></li>
      <li><a href="lab2/Behavioral_patterns/State.php">7. Состояние</a></li>
      <li><a href="lab2/Behavioral_patterns/Strategy.php">8. Стратегия</a></li>
      <li><a href="lab2/Behavioral_patterns/TemplateMethod.php">9. Шаблонный метод</a></li>
      <li><a href="lab2/Behavioral_patterns/Visitor.php">10. Посетитель</a></li>
    </ul>

    <a class="back-link" href="index.php">← Назад в главное меню</a>
  </div>

  <footer>
    <p>&copy; 2025 Лабораторная работа № 2</p>
  </footer>
</body>
</html>
