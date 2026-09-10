<?php
$pierwsza_wizyta = false;
if(!isset($_COOKIE['wizyta'])) {
    setcookie('wizyta', 'tak', time() + 3600);
    $pierwsza_wizyta = true;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Airport</title>
   <style>
body {
    font-family: Arial;
    background-color: rgb(244, 164, 96);
    color: white;
    margin: 0;
}


.baner1 {
    background-color: rgb(244, 164, 96);
    text-align: center;
    width: 75%;
    height: 150px;
    font-size: 200%;
    float: left;
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

.stopka1, .stopka2, .stopka3 {
    float: left;
    height: 150px;
    background-color: rgb(244, 164, 96);
    box-sizing: border-box;
}

.stopka1, .stopka3 {
    width: 20%;
    padding-top: 90px;
}

.stopka2 {
    width: 60%;
    text-align: center;
}

p {
    font-size: 150%;
    border: 2px dotted rgb(169, 169, 169);
    margin: 10px;
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
        <table>
           <tr>
                <th>lp.</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "123", "airport");
            $query = "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC;";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_row($result)){
                echo "
                <tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td>$row[4]</td>
                </tr>";
            }

            mysqli_close($conn);
            ?>
        </table>
    </div>
    <div class="stopka1"></div>
    <div class="stopka2">
    <?php
            if($pierwsza_wizyta) {
                echo "<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>";
            } else {
                echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
            }
    ?>
    </div>
    <div class="stopka3">Autor:</div>

</body>
</html>
