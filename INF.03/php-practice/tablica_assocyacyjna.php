<?php

$autobus = [
    "firma" => "Solaris",
    "miejsca" => 25,
    "rok_produkcji" => 2021,
    "route" => "Piastow - Warszawa",
    "numer" => 144
];

$tabela = "<table border='1'>\n";

foreach ($autobus as $key => $value) {
    $tabela .= <<<HTML
    <tr>
        <td><strong>{$key}</strong></td>
        <td><strong>{$value}</storng></td>
    </tr>
    \n
    HTML;
}

$tabela .= "</table>";

echo $tabela;

?>
