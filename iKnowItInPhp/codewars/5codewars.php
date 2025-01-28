<!-- Task
You get an array of numbers, return the sum of all of the positives ones.
Note
If there is nothing to sum, the sum is default to 0. -->

<?php

function positive_sum($arr) {
    $answear=0;
   foreach($arr as $element){
    if($element>0){
        $answear =$answear+$element;
    }
 }
return $answear;
  }



  $table = [1, -4, 7, 12];

  echo(positive_sum($table));

  $table2 = [0,0,0];

  echo("<br>".positive_sum($table2));