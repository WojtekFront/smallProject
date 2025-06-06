<?php
// Given a list of integers, determine whether the sum of its elements is odd or even.
// Give your answer as a string matching "odd" or "even".
// If the input array is empty consider it as: [0] (array with a zero).

// Examples:
// Input: [0]
// Output: "even"

// Input: [0, 1, 4]
// Output: "odd"

// Input: [0, -1, -5]
// Output: "even"


function odd_or_even(array $a): string {
  return array_sum($a)%2 ? "odd" : "even";
}

echo (odd_or_even([0,1,112])."<br>");

echo (odd_or_even([0,12,2])."<br>");
echo (odd_or_even([10,1,2])."<br>");
echo (odd_or_even([1,-1,0])."<br>");