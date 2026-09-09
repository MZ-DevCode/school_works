<?php
    $conn = mysqli_connect("localhost, "root, "", "kino");
?>

<!DOCTYPE html>
<html lang="pl"> //zadeklarowany polski język zawartości witryny
<head>
    <title>Gry komputerowe</title>
</head>
<body>
    <div class="naglowkowy">
        <h1>Rankieng gier komputerowych</h1>
    </div>
    <div class="lewy">
        <h3>Top 5 gier w tym miesiącu</h3>
        <ul>
            <li>
                <?php
                // skrypt 1
                ?>
            </li>
        <ul>
            <h3>Nasz sklep</h3>
            <a href="http://sklep.gry.pl">Tu kupisz gry/a>
    </div>
    <div class="prawy">
        <h3>Dodaj nowa gre</h3>
        <form>
            nazwa<input type="text" name="nazwa">
            opis<input type="text" name="opis">
            cena<input type="text" name="cena">
            zdjecie<input type="text" name="zdjecie">
            <input type="button" name="Dodaj">DODAJ
        </form>
    </div>
    <main>
        <?php
        // skrypt 2
        ?>
    </main>
</body>
<footer>
    <?php
    //skrypt 3

     mysqli_close($conn);
    ?>
</footer>
