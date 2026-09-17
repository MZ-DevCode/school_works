<?php

try {
    $pdo = new PDO('sqlite:shop.db'); // Подключение к бд

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*
      $pdo          - переменная с объектом подключения
      ->            - вызов метода у объекта
      setAttribute  - метод для установки настроек
      PDO           - встроенный класс PHP
      ::            - оператор доступа к константе класса
      ATTR_ERRMODE  - настройка "режим ошибок"
      ,             - разделитель аргументов
      PDO::ERRMODE_EXCEPTION - значение "выбрасывать исключения при ошибках"
    */

    $sql = "CREATE TABLE IF NOT EXISTS products (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        price REAL NOT NULL,
        stock INTEGER NOT NULL
    );";

    $pdo->exec($sql);

    $stmtInsert = $pdo->prepare("INSERT INTO products (name, price, stock) VALUES (?, ?, ?)");
    $stmtInsert->execute(["Футболка Oversize", 1499.99, 10]);
    echo "Товар успешно добавлен<br><br>";
    $stmtSelect = $pdo->query("SELECT id, name, price, stock FROM products");
    $products = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
    echo "Успешное подключение";

    echo "<b>Каталог товаров</b>"
    foreach ($products as $product) {
            echo "ID: {$product->id}<br>";
            echo "Название: {$product->name}<br>";
            echo "Цена: {$product->price}<br>";
            echo "В наличии: {$product->stock} шт.<br>";
        }

} catch (PDOException $e) {  // PDOException - встроенный класс PHP, который ловит исключительно ошибки базы данных через PDO
    echo "Ошибка: " . $e->getMessage();
}

?>
