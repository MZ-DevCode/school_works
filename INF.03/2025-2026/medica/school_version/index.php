<?php
  $polaczenie = mysqli_connect("localhost", "root", "", "medica");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Przychodnia Medica</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="shortcut icon" href="obraz2.png" type="image/x-icon">
</head>
<body>

    <header>
        <h1>Abonamenty w przychodni Medica</h1>
    </header>

    <article>
        <?php
        $zapytanie1 = "SELECT nazwa, cena, opis FROM abonamenty";
        $wynik1 = mysqli_query($polaczenie, $zapytanie1);

        while($r = mysqli_fetch_row($wynik1)) {
            echo "<h3>Pakiet " . $r[0] . " - cena " . $r[1] . " zł</h3>";
            echo "<p>" . $r[2] . "</p>";
        }
        ?>
        <a href="opis.html">Dowiedz się więcej</a>
    </article>

    <main>
        <section>
            <h2>Standardowy</h2>
            <ul>
                <?php
                $sql1 = "SELECT * FROM abonamenty WHERE id = 1";
                $res1 = mysqli_query($polaczenie, $sql1);
                while($row = mysqli_fetch_row($res1)) {
                    echo "<li>" . $row[3] . "</li>"; 
                }
                ?>
            </ul>
        </section>

        <section>
            <h2>Premium</h2>
            <ul>
                <?php
                $sql2 = "SELECT * FROM abonamenty WHERE id = 2";
                $res2 = mysqli_query($polaczenie, $sql2);
                while($row = mysqli_fetch_row($res2)) {
                    echo "<li>" . $row[3] . "</li>";
                }
                ?>
            </ul>
        </section>

        <section>
            <h2>Dziecko</h2>
            <ul>
                <?php
                $sql3 = "SELECT * FROM abonamenty WHERE id = 3";
                $res3 = mysqli_query($polaczenie, $sql3);
                while($row = mysqli_fetch_row($res3)) {
                    echo "<li>" . $row[3] . "</li>";
                }
                ?>
            </ul>
        </section>
    </main>

    <footer>
        <p>
            <img src="obraz2.png" alt="przychodnia"> 
            Strone przygotowal: X
        </p>
    </footer>

    <?php
        mysqli_close($polaczenie);
    ?>
</body>
</html>
