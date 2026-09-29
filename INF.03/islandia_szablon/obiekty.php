<?php



$obiekty = [
    1 => [
        "nazwa" => "Strokkur",
        "rodzaj" => "gejzer",
        "nazwaCechy" => "Aktywność",
        "wartoscCechy" => "regularne erupcje",
        "opis" => "Strokkur jest jednym z najbardziej znanych gejzerów Islandii.",
        "plik" => "img/strokkur.jpg"
    ],
    2 => [
        "nazwa" => "Skógafoss",
        "rodzaj" => "wodospad",
        "nazwaCechy" => "Wysokość",
        "wartoscCechy" => "około 60 m",
        "opis" => "Skógafoss to jeden z najbardziej rozpoznawalnych wodospadów Islandii.",
        "plik" => "img/skogafoss.jpg"
    ],
    3 => [
        "nazwa" => "Seljalandsfoss",
        "rodzaj" => "wodospad",
        "nazwaCechy" => "Wysokość",
        "wartoscCechy" => "około 60 m",
        "opis" => "Seljalandsfoss jest wodospadem, za którego strumieniem prowadzi ścieżka.",
        "plik" => "img/seljalandsfoss.jpg"
    ],
    4 => [
        "nazwa" => "Goðafoss",
        "rodzaj" => "wodospad",
        "nazwaCechy" => "Nazwa",
        "wartoscCechy" => "Wodospad Bogów",
        "opis" => "Goðafoss jest malowniczym wodospadem położonym na północy Islandii.",
        "plik" => "img/godafoss.jpg"
    ],
    5 => [
        "nazwa" => "Dettifoss",
        "rodzaj" => "wodospad",
        "nazwaCechy" => "Charakter",
        "wartoscCechy" => "potężny przepływ wody",
        "opis" => "Dettifoss jest dużym i bardzo dynamicznym wodospadem Islandii.",
        "plik" => "img/dettifoss.jpg"
    ],
    6 => [
        "nazwa" => "Hekla",
        "rodzaj" => "wulkan",
        "nazwaCechy" => "Typ",
        "wartoscCechy" => "wulkan",
        "opis" => "Hekla jest jednym z najbardziej znanych islandzkich wulkanów.",
        "plik" => "img/hekla.jpg"
    ],
    7 => [
        "nazwa" => "Kirkjufell",
        "rodzaj" => "szczyt",
        "nazwaCechy" => "Wysokość",
        "wartoscCechy" => "463 m",
        "opis" => "Kirkjufell to charakterystyczna góra położona na półwyspie Snæfellsnes.",
        "plik" => "img/kirkjufell.jpg"
    ],
    8 => [
        "nazwa" => "Húsavík",
        "rodzaj" => "siedlisko zwierząt",
        "nazwaCechy" => "Atrakcja",
        "wartoscCechy" => "obserwacja wielorybów",
        "opis" => "Húsavík jest znane jako jedno z popularnych miejsc obserwacji wielorybów.",
        "plik" => "img/husavik.jpg"
    ],
    9 => [
        "nazwa" => "Maskonury",
        "rodzaj" => "siedlisko zwierząt",
        "nazwaCechy" => "Sezon",
        "wartoscCechy" => "wiosna i lato",
        "opis" => "Maskonury można spotkać na islandzkich klifach i wybrzeżach.",
        "plik" => "img/maskonur.jpg"
    ]
];


?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>

<header>
    <h1>
        <a href="islandia.php">Zwiedzaj Islandię</a>
    </h1>
</header>

<aside>
    <h3>Do zwiedzania</h3>

    <ul>
        <li>
            <span class="ikona">💧</span>Wodospady:
            <ol>
                <li>Skógafoss</li>
                <li>Seljalandsfoss</li>
                <li>Goðafoss</li>
                <li>Dettifoss</li>
            </ol>
        </li>

        <li>
            <span class="ikona">🐦</span>Siedliska zwierząt:
            <ol>
                <li>Maskonury</li>
                <li>Húsavík – wieloryby</li>
            </ol>
        </li>
    </ul>
</aside>

<main>
    <h2>Opis miejsca</h2>

    <section>
        <img class="zdjecie-obiektu" src="" alt="">

        <h2>Nazwa</h2>

        <h3>Rodzaj</h3>

        <p>
            Cechy:
            Wartość
        </p>

        <p>Opis</p>
    </section>
</main>

<footer>
    <hr>
    <p>Autor: 00000000000</p>
</footer>

</body>
</html>
