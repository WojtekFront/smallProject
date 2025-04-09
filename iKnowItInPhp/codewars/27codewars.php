<?php
// Challenge:
// Given a two-dimensional array of integers, return the flattened version of the array with all the integers in the sorted (ascending) order.

// Example:
// Given [[3, 2, 1], [4, 6, 5], [], [9, 7, 8]], your function should return [1, 2, 3, 4, 5, 6, 7, 8, 9].


function flatten_and_sort2($array) {
  $new_array=[];
  foreach($array as $s_array){
    foreach($s_array as $elements){
      $new_array[]= $elements; 
    }
  }
  sort($new_array);
 return $new_array;
}

function flatten_and_sort($array) {
 $new_array= array_merge(...$array);
 sort($new_array);
 return $new_array;
}

print_r (flatten_and_sort([[3, 2, 1,100], [4, 6, 5], [], [9, 7, 8]]));