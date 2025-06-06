<?php
// Write a function which takes a number as input and returns the sum of the absolute value of each of the number's decimal digits.

// For example: (Input --> Output)

// 10 --> 1
// 99 --> 18
// -32 --> 5

function sumDigits(int $number): int{
  return array_sum(array_map('intval', str_split((string)$number)));
  }