<?php

// Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).

// Examples:

// solution('abc', 'bc') // returns true
// solution('abc', 'd') // returns false

function solution($str, $ending) {
    $str_ending="";
    $str_len = strlen($str);
    
    for($i=$str_len-2; $i<$str_len; $i++){
        $str_ending =$str_ending.$str[$i];
    }
    
    return !strcmp($str_ending,$ending) ;
  }


  function solution2($str, $ending) {
    $len_ending = strlen($ending) * -1;
    if($len_ending === 0) return true;
    $str_end = substr($str, $len_ending );
    return !strcmp($str_end, $ending);
    // return $str_end."<br>";
  }






  echo(solution2("ryba","ba"));
  echo(solution2("ryba","1ba"));
  echo(solution2("woda","da"));
  echo(solution2("abc", "abcd"));
  echo(solution2('this will not pass', '`^$<>()[]*|'));
  echo(solution2('ails', 'fails'));
  echo(solution2("abc", ""));

