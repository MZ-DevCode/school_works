<?php
try{
    $conn = mysqli_connect("localhost", "root", "", "gry");
} catch(mysqli_sql_exception $e){
    die("Blad polaczenia z baza dannych") . $e->getMessage();
}
    ?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Gry komputerowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="naglowkowy">
        <h1>Ranking gier komputerowych</h1>
    </div>
    <div class="lewy">
        <h3>Top 5 gier w tym miesiacu</h3>
        <ul>
            <?php
                $query1 = "SELECT nazwa, punkty FROM gry ORDER BY punkty DESC LIMIT 5;";

               try{
                $result1 = mysqli_query($conn, $query1);

                while ($row = mysqli_fetch_object($result1)){
                   echo "<li> {$row->nazwa} <span class='liczba-punktow'>{$row->punkty}</span> </li>";
                }
            } catch(mysqli_sql_exception $e){
                echo "Nie udalo sie pobrac opisu gry" . $e->getMessage();
            }
            ?>
        </ul>
            <h3>Nasz sklep</h3>
            <a href="http://sklep.gry.pl">Tu kupisz gry</a>
    </div>

    <main>
        <?php
        $query2 = "SELECT id, nazwa, zdjecie FROM gry;";
        $result2 = mysqli_query($conn, $query2);
        while ($row = mysqli_fetch_object($result2)){
            echo <<<HTML
            <div>
                <img src='pliki1/{$row->zdjecie}' alt='{$row->nazwa}' title='{$row->id}'>
                <p>{$row->nazwa}</p>
            </div>
            HTML;
        }
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
                <input type="submit" name="pokaz" value="Pokaz opis">
            </form>
        <?php
        if(isset($_POST['pokaz']) && !empty($_POST['id_gry'])) {
            $id = $_POST['id_gry'];
            try{
            $result3 = mysqli_execute_query($conn, "SELECT nazwa, punkty, cena, opis FROM gry WHERE id = ?", [$id]);

            while($row = mysqli_fetch_object($result3)){
                echo <<<HTML
                <h2>{$row->nazwa}, {$row->punkty} punktow, {$row->cena} zł</h2>
                <p>{$row->opis}</p>
                HTML;
            }
        } catch(mysqli_sql_exception $e){
            echo "Nie udalo sie pobrac dane z bazy danych" . $e->getMessage();
        }
        }
         mysqli_close($conn);
        ?>
    </footer>
</body>
</html>
