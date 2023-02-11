<?php 
    require_once('projectsElements/headingP.php')
?>

<h3>Compare strings:</h3>
<p>Here is compared string "ana" with: "ana", "", "anna", "Ana";</p>
<br>


<?php
//nie jest to najszybsza oraz najkrótsza wersja. 
//postanowiłem oddelegować do funkji zadania, które można później edytować
$zmienna1 = "ana";
$zmienna2 = "ana";
$zmienna3 = "";
$zmienna4 = "anna";
$zmienna5 = "Ana";


echo "Czy zmienna \"{$zmienna1}\" i \"{$zmienna2}\" są takie same: " .  (!(strncmp($zmienna1, $zmienna2, strlen($zmienna1))) ? "tak" . "<br>" : "nie" . "<br>");
echo "Czy zmienna \"{$zmienna1}\" i \"{$zmienna3}\" są takie same: " .  (!(strncmp($zmienna1, $zmienna3, strlen($zmienna1))) ? "tak" . "<br>" : "nie" . "<br>");
echo "Czy zmienna \"{$zmienna1}\" i \"{$zmienna4}\" są takie same: " .  (!(strncmp($zmienna1, $zmienna4, strlen($zmienna1))) ? "tak" . "<br>" : "nie" . "<br>");
echo "Czy zmienna \"{$zmienna1}\" i \"{$zmienna5}\" są takie same: " .  (!(strncmp($zmienna1, $zmienna5, strlen($zmienna1))) ? "tak" . "<br>" : "nie" . "<br>");

echo "<br> W tym zadaniu użyłem funkcji <b>strncmp(zmienna1, zmienna2, strlen(zmienna1))</b>, która porównuje dwie zmienne.";
// czy zmienne istnieją
function zmiennaIstnieje($z1, $z2)
{
    return (!isset($z1) || !isset($z2)) ? true : false;
}

// czy są pust
function zmiennaNieJestPusta($z1, $z2)
{
    return (!is_null($z1) || !is_null($z2)) ? true : false;
}

// czy zmienne są tego samego typu tekstowego
function zmiennaJestStringiem($z1, $z2)
{
    return (!is_string($z1) || !is_string($z2)) ? true : false;
}

// czy zmienne czy zmienne są tej samej długości
function jakieMajaDlugosci($z1, $z2)
{
    return (strlen($z1) != strlen($z2)) ? true : false;
}

// iterowanie dwóch zmiennych i porównywanie

?>

<?php
    require_once('projectsElements/footerP.php');
?>
