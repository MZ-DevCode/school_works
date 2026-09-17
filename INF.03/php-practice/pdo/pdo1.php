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

    echo "Успешное подключение";

} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}

?>
