<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Sklep papierniczy</title>
</head>
<body>
    <div class="baner"><h1>W naszym sklepie internetowym kupisz najtaniej</h1></div>
<main>
<div class="lewy">
    <h3>Promocja 15% obejmuje artykuły:</h3>
    <ul>
        <?php
        $connect = mysqli_connect("localhost", "root", "", "sklep");

        $sql1 = "SELECT nazwa FROM towary WHERE promocja = 1";
        $query1 = mysqli_query($connect, $sql1);

        while($row = mysqli_fetch_row($query1)){
            echo "<li>$row[0]</li>";
        }
        ?>
    </ul>
</div>

<div class="srodkowy">
    <h3>Cena wybranego artykułu w promocji</h3>
    <form method="post" action="index.php">
        <select name="towar">
            <option value="Gumka do mazania">Gumka do mazania</option>
            <option value="Cienkopis">Cienkopis</option>
            <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
            <option value="Markery 4 szt.">Markery 4 szt.</option>
        </select>
        <button type="submit">WYBIERZ</button>
    </form>
    <?php
    if(isset($_POST['towar'])){
        $towar = $_POST['towar'];
        $sql2 = "SELECT cena FROM towary WHERE nazwa = '$towar'";
        $query2 = mysqli_query($connect, $sql2);
        $row = mysqli_fetch_row($query2);
 
        if ($row){
            $cena_O = $row[0];
            $cena_P = $cena_O * 0.85;
            $cena_F = round($cena_P, 2);
            echo "Cena w promocji: " . $cena_F;
        }
    }

    mysqli_close($connect);

    ?>
</div>

<div class="prawy">
    <h3>Kontakt</h3>
    <p>telefon: 123123123<br>
       e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
    <img src="assets/promocja.png" alt="promocja">
</div>
</main>
    <div class="stopka"><h4>Autor strony: XXX</h4></div>
</body>
</html>
