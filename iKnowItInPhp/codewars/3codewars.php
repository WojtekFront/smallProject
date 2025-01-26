<!-- 
    Given two integers a and b, which can be positive or negative, find the sum of all the integers between and including them and return it. If the two numbers are equal return a or b. 
 -->

 <?php
  
function getSum(int $a, int $b): int{
    
    if($a==$b){
        return $a;
    }
     $small = min($a, $b);
     $big = max($a,$b);

    $lenghtA = abs($big-$small);
    $answer = 0;
    for($i=0; $i<=$lenghtA; $i++){
        $answer = $answer + ($small + $i) ;
    }
    return $answer;
}

function getSum2(int $a, int $b): int{
    $arr = range($a, $b);
    return array_sum($arr);
    // your code here
  }

 $value= getSum2(-10,1);
 print($value);
/*

analiza:
1. sprawdzamy czy są równe
jeżeli tak to zwracamy pierwszą wartość
2. jeżeli są różne:
    2.1 napisnie funkcji, zwróci wszystkie wartości między liczbami i doda je do tablicy
    a) +sprawdzić, która wartość jest większa
    b) potrzebujemy zmiennej, do której będziemy dodawać ponieważ tablica: $answer
    c) pętli for dodającej +1
    array_push($values, $i);
*/