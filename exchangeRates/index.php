<!DOCTYPE html>
<html>

<head>
    <!-- Remote style sheet -->
  
</head>

<body>

<!--kursy walut:
USD 

 -->
 <table> 
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
</td></tr>

  <?php
$dane = file_get_contents('http://api.nbp.pl/api/exchangerates/rates/a/eur?format=json');
$json = json_decode($dane);
$mid = $json->rates[0]->mid;
echo($mid)."<br>";

$dane = file_get_contents('http://api.nbp.pl/api/exchangerates/rates/a/usd?format=json');
$json = json_decode($dane);
$mid = $json->rates[0]->mid;
echo($mid)."<br>";



$dane2 = file_get_contents('http://api.nbp.pl/api/exchangerates/rates/a/usd?format=json');

$json2 = json_decode($dane2);

$mid2 =$json2->rates[0]->mid;


echo($mid2)."<br>";
  ?>
</body>

</html>