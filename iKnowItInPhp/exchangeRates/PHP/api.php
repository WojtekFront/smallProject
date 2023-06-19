<?php
$waluta= "usd";

// pobranie kursu walut
$po = file_get_contents("http://api.nbp.pl/api/exchangerates/rates/a/".$waluta."?format=json");

$json2 = json_decode($dane2);

$mid2 =$json2->rates[0]->mid;

echo($mid2)."<br>";

?>