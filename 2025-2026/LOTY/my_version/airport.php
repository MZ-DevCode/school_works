<?php
$is_first_visit = false;
if (!isset($_COOKIE["wizyta"])) {
    setcookie("wizyta", "tak", [
        "expires" => time() + 3600,
        "path" => "/",
        "httponly" => true,
        "samesite" => "Lax",
    ]);
    $is_first_visit = true;
}

$host = "localhost";
$db_name = "airport";
$user = "root";
$pass = "123";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $sql =
        "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC";
    $flights = $pdo->query($sql)->fetchAll();
} catch (PDOException $e) {
    $db_error = "Błąd połączenia z bazą danych";
    $flights = [];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Airport</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: rgb(244, 164, 96);
        color: white;
        margin: 0;
    }

    .baner1 {
        background-color: rgb(244, 164, 96);
        text-align: center;
        width: 75%;
        height: 150px;
        float: left;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .baner2 {
        background-color: rgb(244, 164, 96);
        width: 25%;
        height: 150px;
        float: left;
        text-align: right;
    }

    .glowny {
        clear: both;
        background-color: rgb(128, 0, 0);
        padding: 50px;
        text-transform: uppercase;
        min-height: 200px;
    }

    .stopka1,
    .stopka2,
    .stopka3 {
        float: left;
        height: 150px;
        background-color: rgb(244, 164, 96);
        box-sizing: border-box;
    }

    .stopka1,
    .stopka3 {
        width: 20%;
        padding-top: 90px;
    }

    .stopka2 {
        width: 60%;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    p {
        font-size: 150%;
        border: 2px dotted rgb(169, 169, 169);
        margin: 10px;
        padding: 10px;
    }

    p:hover {
        background-color: rgb(169, 169, 169);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid rgb(192, 192, 192);
        padding: 5px;
    }

    </style>
</head>
<body>
    <div class="baner1"><h2>Odloty z lotniska</h2></div>
    <div class="baner2"><img src="zad6.png" alt="logotyp"></div>

    <div class="glowny">
        <h4>Tabela odlotów</h4>
        <?php if (isset($db_error)): ?>
            <p><?= $db_error ?></p>
        <?php else: ?>
            <table>
                <tr>
                    <th>lp.</th>
                    <th>numer rejsu</th>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>status</th>
                </tr>
                <?php foreach ($flights as $f): ?>
                <tr>
                    <td><?= htmlspecialchars($f["id"]) ?></td>
                    <td><?= htmlspecialchars($f["nr_rejsu"]) ?></td>
                    <td><?= htmlspecialchars($f["czas"]) ?></td>
                    <td><?= htmlspecialchars($f["kierunek"]) ?></td>
                    <td><?= htmlspecialchars($f["status_lotu"]) ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>

    <div class="stopka1"></div>
    <div class="stopka2">
        <?php if ($is_first_visit): ?>
            <p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>
        <?php else: ?>
            <p><b>Miło nam, że nas znowu odwiedziłeś</b></p>
        <?php endif; ?>
    </div>
    <div class="stopka3">Autor: 00000000000</div>
</body>
</html>
