<?php
$db = new PDO('sqlite:shop.db');

$db->exec("CREATE TABLE IF NOT EXISTS products (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT,
    price INTEGER
)");

if(!empty($_POST['title']) && !empty($_POST['price'])){
	$stmt = $db->prepare("INSERT INTO products (title, price) VALUES (?, ?)");
	$stmt->execute([$_POST['title'], $_POST['price']]);
}

?>
