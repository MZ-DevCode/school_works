<?php


$autobus = [
	"firma" => "Solaris",
	"miejsca" => 25,
	"rok_produkcji" => 2021,
	"route" => "Piastow - Warszawa",
	"numer" => 144
];

foreach ($autobus as $key => $value){
	echo $key . ": " . $value . "\n";
}


?>
