<?php

$flotaAutobusow = [
    [
        "firma" => "Solaris",
        "miejsca" => 25,
        "rok_produkcji" => 2021,
        "route" => "Piastow - Warszawa",
        "numer" => 144
    ],
    [
        "firma" => "Mercedes",
        "miejsca" => 35,
        "rok_produkcji" => 2019,
        "route" => "Pruszkow - Warszawa",
        "numer" => 717
    ],
    [
        "firma" => "Volvo",
        "miejsca" => 42,
        "rok_produkcji" => 2023,
        "route" => "Warszawa - Krakow",
        "numer" => 500
    ]
];

echo "<table border='1'>\n";

foreach ($flotaAutobusow as $autobus) {
    foreach ($autobus as $key => $value) {
        echo <<<HTML
        <tr>
            <td><strong>{$key}</strong></td>
            <td><strong>{$value}</strong></td>
        </tr>
        
        HTML;
    }
}

echo "</table>";

?>
