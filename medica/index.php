<?php
    $conn = mysqli("localhost", "root", "", "medica");
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Przychodnia Medica</title>
        <link rel="stylesheet" href="styl.css">
        <link rel="shortcut icon" href="Obraz2.png" type="image/x-icon">
    </head>
    <body>
        <header>
            <h1>Abonamenty w przychodni Medica</h1>
        </header>

        <article>
            <?php
	     $select = "SELECT nazwa, cena, opis FROM abonamenty"
	     $query = ($conn, $select);
		while($wiersz = mysqli_fetch_array($query)){
			echo "Pakiet" . $query['nazwa'] . "cena" . $query['cena'] ."zl";
			echo "<p>" . $query['opis'] . "</p>"
		}
            ?>
            <a href="opis.html">Dowiedz się więcej</a>
        </article>

        <main>
            <section id="pierwszy">
                <h2>Standardowy</h2>
                <ul>
                    <?php
			$select2 = "SELECT nazwa, cecha FROM abonament WHERE id = '1'";
			$query2 = ($conn, $select2)
			while($wierz = mysqli_fetch_array($query2)){
				echo "<li>" . $query2['cecha'] . "</li>"
			}
                    ?>
                </ul>
            </section>

            <section id="drugi">
                <h2>Premium</h2>
                <ul>
                    <?php

                    ?>
                </ul>
            </section>

            <section id="trzeci">
                <h2>Dziecko</h2>
                <ul>
                    <?php

                    ?>
                </ul>
            </section>
        </main>

        <footer>
            <p><img src="obraz2.png" alt="przychodnia">Stronę przygotował:</a></p>
        </footer>
    </body>
</html>

<?php
      $mysqli_close($conn);
?>
