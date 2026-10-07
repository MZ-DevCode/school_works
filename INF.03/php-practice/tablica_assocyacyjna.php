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
	$sKey = strtoupper($key);
	$nValue = str_replace("Warszawa", "Warszawa Glowna", $value);
	$nnValue = strtoupper($nValue);
   echo <<<HTML
    <tr>
        <td><strong>{$sKey}</strong></td>
        <td><strong>{$nnValue}</strong></td>
    </tr>
    
    HTML;
}

echo "</table>";

?>
