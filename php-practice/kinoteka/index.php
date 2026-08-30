<!DOCTYPE html> 
<html lang="pl"> //zadeklarowany polski język zawartości witryny
<head>
	<meta charset="utf-8"> //jawnie zastosowany właściwy standard kodowania polskich znaków
	<title>Lista aktorow | KinoTEKA</title>
	<link rel="stylesheet" href="static/styl.css">
</head>
<body>

<header>
	<h2><a href="index.php">KinoTEKA<a/></h2>
</header>
<header>
	<em><p>W naszej bazie znajdują się najlepsi aktorzy</p></em>
</header>

<main>
	<h1>Najlepsi aktorzy tylko w naszym kinie</h2>
	<div class="aktorzy">
		<?php
		$conn = mysqli_connect("localhost, "root, "", "kino");

		



		?>
	</div>
</main>

<footer>
	<strong><p>Autor: </p><strong>
</footer>
</body>
</html>

