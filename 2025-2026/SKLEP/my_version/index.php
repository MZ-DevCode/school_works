<?php
$pdo = new PDO("mysql:host=localhost;dbname=sklep;charset=utf8", "root", "");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
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
		$promoItems = $pdo->query("SELECT nazwa FROM towary WHERE promocja = 1");
		$allProducts = $pdo->query("SELECT nazwa FROM towary");
		$row = null;
		if(isset($_POST['towar'])){
			$stmt = $pdo->prepare("SELECT cena FROM towary WHERE nazwa = ?")
			$stmt->execute($_POST['towar']);
			$row = $stmt->fetch();
		}
		?>
            </ul>
        </div>
        <div class="srodkowy">
            <h3>Cena wybranego artykułu w promocji</h3>
            <form method="post">
                <select name="towar">
                    <option value="Gumka do mazania">Gumka do mazania</option>
                    <option value="Cienkopis">Cienkopis</option>
                    <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                    <option value="Markery 4 szt.">Markery 4 szt.</option>
                </select>
                <button type="submit">WYBIERZ</button>
            </form>
            <?
		$pdo = null;
		?>
        </div>
        <div class="prawy">
            <h3>Kontakt</h3>
            <p>telefon: 123123123<br>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
            <img src="assets/promocja.png" alt="promocja">
        </div>
    </main>
    <div class="stopka"><h4>Autor strony: XXX</h4></div>
</body>
</html>

