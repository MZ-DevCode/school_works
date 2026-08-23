<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="baner">
        <h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
    </header>

    <section class="lewy">
        <h2>Dodaj czytelnika</h2>
        <form action="biblioteka.php" method="post">
            imie: <input type="text" name="imie" id="imie"><br>
            nazwisko: <input type="text" name="nazwisko" id="nazwisko"><br>
            rok urodzenia: <input type="number" name="rok" id="rok"><br>
            <button type="submit" name="dodaj">DODAJ</button>
        </form>
        <?php
            $connect = mysqli_connect("localhost", "root", "", "biblioteka");
            
            if (isset($_POST['dodaj'])) { 
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $rok = $_POST['rok'];

                echo "Czytelnik: " . $nazwisko . " został dodany do bazy danych";

                $kod = strtolower(substr($imie, 0, 2) . substr($rok, -2) . substr($nazwisko, 0, 2));

                $query1 = "INSERT INTO czytelnicy (imie, nazwisko, kod) VALUES ('$imie', '$nazwisko', '$kod')";
                mysqli_query($connect, $query1);
            }
        ?>
    </section>

    <section class="srodkowy">
        <img src="biblioteka.png" alt="biblioteka">
        <h4>
            ul. Czytelnicza 25<br>
            12-120 Ksiazkowice<br>
            tel.: 123123123<br>
            e-mail: <a href="mailto:biuro@bib.pl">biuro@bib.pl</a>
        </h4>
    </section>

    <section class="prawy">
        <h3>Nasi czytelnicy:</h3>
        <ul>
            <?php
            $query2 = "SELECT imie, nazwisko FROM czytelnicy";
            $result = mysqli_query($connect, $query2);

            while($row = mysqli_fetch_row($result)){
                echo "<li>" . $row[0] . " " . $row[1] . "</li>";
            }
            
            mysqli_close($connect);
            ?>
        </ul>
    </section>

    <footer class="stopka">
        <p></p>
    </footer>
</body>
</html>
