<!DOCTYPE html>
<html>

<head>
    <!-- Remote style sheet -->
  
</head>

<body>

<!--kursy walut:
USD 

 -->
 <!-- <table> 
<tr><td>
dolar amerykański	1 USD
</td></tr>
<tr><td>
euro	1 EUR
</td></tr>
<tr><td>
korona czeska	1 CZK
</td></tr>
<tr><td>
korona norweska	1 NOK
</td></tr> -->

  <?php
// $dane = file_get_contents('http://api.nbp.pl/api/exchangerates/rates/a/eur?format=json');
// $json = json_decode($dane);
// $mid = $json->rates[0]->mid;
// echo($mid)."<br>";

// $dane = file_get_contents('http://api.nbp.pl/api/exchangerates/rates/a/usd?format=json');
// $json = json_decode($dane);
// $mid = $json->rates[0]->mid;
// echo($mid)."<br>";


$waluta= "usd";
$dane = file_get_contents("http://api.nbp.pl/api/exchangerates/rates/a/".$waluta."?format=json");

$json = json_decode($dane);

$mid2 =$json->rates[0]->mid;


echo($mid2)."<br>";
  ?>
</body>

</html>