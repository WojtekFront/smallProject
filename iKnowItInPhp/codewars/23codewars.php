<?php
// Given an array of ones and zeroes, convert the equivalent binary value to an integer.
// Eg: [0, 0, 0, 1] is treated as 0001 which is the binary representation of 1.

// Examples:
// Testing: [0, 0, 0, 1] ==> 1
// Testing: [0, 0, 1, 0] ==> 2
// Testing: [0, 1, 0, 1] ==> 5
// Testing: [1, 0, 0, 1] ==> 9
// Testing: [0, 0, 1, 0] ==> 2
// Testing: [0, 1, 1, 0] ==> 6
// Testing: [1, 1, 1, 1] ==> 15
// Testing: [1, 0, 1, 1] ==> 11


function binaryArrayToNumber2(array $arr): int {
    $number=0;
    for($i=0; $i < count($arr); $i++){
        if($i==0 && $arr[$i]===1){
            $number +=8;
        }
        if($i==1 && $arr[$i]===1){
            $number += 4;
        }
        if($i==2 && $arr[$i]===1){
            $number += 2;
        }
        if($i==3 && $arr[$i]===1){
            $number += 1;
        }
    }

    return $number;
  }

  function binaryArrayToNumber(array $arr): int {
    $number=0;
    $l_arr=count($arr)-1;
    for($i=0; $i < $l_arr; $i++){
        $number += $arr[$i] * pow(2, $l_arr - $i);
    }
    return $number;
  }

  echo binaryArrayToNumber([1,1,0,1,1,0,1,0,1,0])."<br>";
  echo binaryArrayToNumber([0,1,0,0])."<br>";
  echo binaryArrayToNumber([0,0,1,0])."<br>";
  echo binaryArrayToNumber([0,0,0,1])."<br>";
  echo binaryArrayToNumber([1,1,1,1])."<br>";