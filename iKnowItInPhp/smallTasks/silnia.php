<?php
// pierwsze zadanie rekrutacyjne wykonanie silni wraz ze sprawdzeniem
// zostanie przekazana wartość (input), która sprawdzi i wyliczy silnię


$zmienna = 5;


function silnia($value)
{
    if (!isset($value) || is_null($value)) {
        //echo "wprowadzona zmienna jest niepoprawna1 <br>";
        $result = "wprowadzona zmienna jest niepoprawna <br>";
    } elseif (!czyToInt($value)) { //sprawdzenie czy zawiera znaki specjalne
        //echo "wprowadzona zmienna jest niepoprawna2 <br>";
        $result = "wprowadzona zmienna jest niepoprawna <br>";
    } elseif ($value >= 0) {
        $result = wyliczSilnie($value);
    } else {
        //  echo "Inny efekt <br>";
        $result = "Inny efekt <br>";
    }
    return $result;
}

function czyToInt($value)
{
    $result = is_integer($value) ? true : false;
    return $result;
}

function wyliczSilnie($value)
{
    $result = 1;
    for ($x = 1; $value >= $x; $x++) {
        $result *= $x;
    }
    return $result;
}

echo silnia($zmienna);
