<!-- An isogram is a word that has no repeating letters, consecutive or non-consecutive. 
 Implement a function that determines whether a string that contains only letters is an isogram. 
 Assume the empty string is an isogram. Ignore letter case. -->



<?php
function isIsogram($string) {
    if(!$string){
        return true;
      }
    $string = strtolower($string);
    $letters = str_split($string);
    sort($letters);
    $w1=$w2="";

        foreach($letters as $s){
            $w2=$s;
            if($w2==$w1){
                return false;
            }else{
                $w1=$s;
            }
        }
    return true;
}

function isIsogram2($string) {
    if(!$string){
        return true;
      }
    $string = strtolower($string); // Ignore case
    $letters = str_split($string);
    
    return count($letters) === count(array_unique($letters));
}


echo(isIsogram("Dermatoglyphics"));
echo(isIsogram("ala"));
echo(isIsogram("Dermatoglyphics"));

