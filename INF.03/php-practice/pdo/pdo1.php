<?php

try{
$pdo = new PDO('sqlite:shop.db'); //подключение к бд

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //

$sql = "CREATE TABLE IF NOT EXISTS products (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        price REAL NOT NULL,
        stock INTEGER NOT NULL
    );";

$pdo->exec($sql);

echo "Успешное подключение";

} catch (PDOException $e){
    echo "Ошибка: " . $e->getMessage();
}

?>
