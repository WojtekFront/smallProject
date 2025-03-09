<?php

// Complete the function that takes two integers (a, b, where a < b) and return an array of all integers between the input parameters, 
// including them.
// For example:
// a = 1
// b = 4
// --> [1, 2, 3, 4]




function between(int $a, int $b): array {
$answear=[];
  if($a <= $b){
    $answear= range($a, $b);
  }
  return $answear;
}

print_r(between(1,11));
print_r(between(11,4));