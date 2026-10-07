<?php

$autobus = [
    "firma" => "Solaris",
    "miejsca" => 25,
    "rok_produkcji" => 2021,
    "route" => "Piastow - Warszawa",
    "numer" => 144
];

echo "<table border='1'>\n";

foreach ($autobus as $key => $value) {
    echo <<<HTML
    <tr>
        <td><strong>{$key}</strong></td>
        <td><strong>{$value}</strong></td>
    </tr>
    
    HTML;
}

echo "</table>";

?>
