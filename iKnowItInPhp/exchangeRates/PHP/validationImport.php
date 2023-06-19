<?php
$kursWaluty = $_POST['exSelect'];
$kursData   = $_POST['exDate'];

if(isset($kursWaluty) && $kursWaluty!="brak"){
   echo "jest waluta = ";

  
  // $kursData =$waluta;
   // pobranie kursu walut
  
   // pobranie kursu walut
   $dane = file_get_contents("http://api.nbp.pl/api/exchangerates/rates/a/".$kursWaluty."?format=json");
   
   $json = json_decode($dane);
   
   $mid =$json->rates[0]->mid;
   
   echo "<br>".($mid).$kursWaluty;

}
else{
    echo "<br>brak waluty"; 
}

if(isset($kursData)){
    if (date("Y-m-d") > $kursData){
    echo "<br>".$kursData;
    }
    else {
        echo "<br>niepoprawna data";
    }
}
$dane2 = file_get_contents( "http://api.nbp.pl/api/exchangerates/rates/a/gbp/2023-06-14/?format=json");
$json2 = json_decode($dane2);
$mid2 = $json2->rates[0]->mid;
echo "<br>".$mid2;


?>