<?php
/*
Write a function that accepts two integers and returns the remainder of dividing the larger value by the smaller value.
*/

function remainder(int $a, int $b) {
 if($a ===0 || $b ===0){
    return 0;
 }
 return $a >=$b ? ($a % $b) : ($b % $a);
}

echo remainder(22,13);
echo remainder(22,0);
echo remainder(0,13);
echo remainder(7,13);
