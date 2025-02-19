<!-- Complete the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false. -->

<?php
  
function boolToWord(bool $bool): string{
  return $bool ? "Yes": "NO"; 
}

 ?>
<!-- Alex just got a new hula hoop, he loves it but feels discouraged because his little brother is better than him.

Write a program where Alex can input (n) how many times the hoop goes round and it will return him an encouraging message:

If Alex gets 10 or more hoops, return the string "Great, now move on to tricks".
If he doesn't get 10 hoops, return the string "Keep at it until you get it".ntil you get it". -->

<?php
function hoopCount ($n)
{
   return $n >= 10 ? "Great, now move on to tricks" : "Keep at it until you get it";
}