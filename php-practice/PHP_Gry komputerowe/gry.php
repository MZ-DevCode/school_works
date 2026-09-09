<?php
    $conn = mysqli_connect("localhost", "root", "", "gry");
?>

<!DOCTYPE html>
<html lang="pl"> <!-- zadeklarowany polski język zawartości witryny -->
<head>
    <title>Gry komputerowe</title>
</head>
<body>
    <div class="naglowkowy">
        <h1>Ranking gier komputerowych</h1>
    </div>
    <div class="lewy">
        <h3>Top 5 gier w tym miesiącu</h3>
        <ul>
            <?php
                // skrypt 1
                $query1 = "SELECT nazwa, punkty FROM gry ORDER BY punkty DESC LIMIT 5;";
                $result1 = mysqli_query($conn, $query1);

                while ($row = mysqli_fetch_object($result1)){
                    echo "<li class='liczba-punktow'> {$row->nazwa} {$row->punkty} </li>";
                }
            ?>
        </ul>
            <h3>Nasz sklep</h3>
            <a href="http://sklep.gry.pl">Tu kupisz gry</a>
    </div>

    <main>
        <?php
        // skrypt 2
        $query2 = "SELECT id, nazwa, zdjecie FROM gry;";
        $result2 = mysqli_query($conn, $query2);
        while ($row = mysqli_fetch_object($result2)){
                echo "<div>";
                echo "<img src='{$row->zdjecie}' alt='{$row->nazwa}'title='{$row->id}''>'";
                echo "<p>{$row->nazwa}</p>";
                echo "</div>";
            };
        ?>
    </main>


    <div class="prawy">
        <h3>Dodaj nową grę</h3>
        <form>
            nazwa <input type="text" name="nazwa"><br>
            opis <input type="text" name="opis"><br>
            cena <input type="text" name="cena"><br>
            zdjecie <input type="text" name="zdjecie"><br>
            <input type="submit" name="dodaj" value="DODAJ">
        </form>
    </div>

    <footer>
        <form action="gry.php" method="POST">
                <input type="number" name="id_gry">
                <input type="submit" name="pokaz" value="Pokaż opis">
            </form>
        <?php
        //skrypt 3
        if(isset($_POST['pokaz']) && !empty($_POST['id_gry'])) {
            $id = $_POST['id_gry'];
            $result3 = mysqli_execute_query($conn, "SELECT nazwa, punkty, cena, opis FROM gry WHERE id = ?", [$id]);

            while($row = mysqli_fetch_object($result3)){
                echo "<h2>{$row->nazwa}, {$row->punkty} punktow, {$row->cena} zl</h2>";
                echo "<p>{$row->opis}</p>";
            }

        }
         mysqli_close($conn);
        ?>
    </footer>
</body>
