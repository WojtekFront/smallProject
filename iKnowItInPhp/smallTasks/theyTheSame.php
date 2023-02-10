<?php
//nie jest to najszybsza oraz najkrótsza wersja. 
//postanowiłem oddelegować do funkji zadania, które można później edytować
$zmienna1 = "ana";
$zmienna2 = "ana";
$zmienna3 = "";
$zmienna4 = "anna";
$zmienna5 = "Ana";


echo strncmp($zmienna1, $zmienna2, strlen($zmienna2)) . "<br>";
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
