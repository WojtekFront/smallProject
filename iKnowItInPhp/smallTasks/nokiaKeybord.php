<?php 
//create kebord like Nokia

$keybord = [
    // Klawisz 2
    "2"   => "a",
    "22"  => "b",
    "222" => "c",

    // Klawisz 3
    "3"   => "d",
    "33"  => "e",
    "333" => "f",

    // Klawisz 4
    "4"   => "g",
    "44"  => "h",
    "444" => "i",

    // Klawisz 5
    "5"   => "j",
    "55"  => "k",
    "555" => "l",

    // Klawisz 6
    "6"   => "m",
    "66"  => "n",
    "666" => "o",

    // Klawisz 7
    "7"   => "p",
    "77"  => "q",
    "777" => "r",
    "7777"=> "s",

    // Klawisz 8
    "8"   => "t",
    "88"  => "u",
    "888" => "v",

    // Klawisz 9
    "9"   => "w",
    "99"  => "x",
    "999" => "y",
    "9999"=> "z",

    // Klawisz 0 - spacja i cyfra zero
    "0"   => " ",
    
    // Opcjonalnie klawisz 1 - znaki specjalne oraz cyfra jeden
    "1"     => ".",
    "11"    => ",",
    "111"   => "?",
    "1111"  => "'",
    "-"     => "-", // opcjonalnie myślnik osobno
];

function keybordChange($string, $keybord){
    $newString=str_split($string);
    $result='';
    foreach($newString as $letter ){
        $key = array_search($letter, $keybord);
        if($key !== false){
            $result .=$key.",";
        } else {
            $result .="?,";
        }
    }

    return $result;
}

echo(keybordChange('alarm', $keybord));