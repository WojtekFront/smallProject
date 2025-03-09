<?php
// It's pretty straightforward. Your goal is to create a function that 
// removes the first and last characters of a string. You're given one parameter, the original string. You don't have to worry about strings with less than two characters.

function remove_char(string $s): string {
  $list_s = str_split($s);
  $size_s = sizeof($list_s);
  $answer=[];
  for($i=0; $i< $size_s ; $i++){
    if($i !== 0 && $i !==$size_s -1 ){
        array_push($answer,$list_s[$i]);
    }
  }
  $new_answer = implode($answer);


  return $new_answer; 
}


function remove_char2(string $s): string {
  return substr($s, 1, -1);
}
remove_char("echo echo");