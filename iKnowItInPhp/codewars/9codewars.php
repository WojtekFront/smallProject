<!-- Given an array of integers.

Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers. 0 is neither positive nor negative.

If the input is an empty array or is null, return an empty array.

Example
For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65]. -->

<?php
function countPositivesSumNegatives($input) {
    if(empty($input)) return [];
    $positive=0;
    $negative=0;
  
    foreach($input as $number){
        $number>0 ? $positive++ : ($negative+=$number);
    }
  
    return [$positive,$negative];
}


print_r(countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));