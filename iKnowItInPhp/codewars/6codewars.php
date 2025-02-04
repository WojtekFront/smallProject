<!-- Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers. -->

<?php

function even_or_odd(int $n): string {
  
    return $n%2 ? "Odd" : "Even"; // Your code here
}
?>
<!-- Given a random non-negative number, you have to return the digits of this number within an array in reverse order. -->

<?php
function digitize(int $n): array{
    return array_reverse(array_map('intval', str_split((string)$n)));
  }
  ?>

  