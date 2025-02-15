<!-- Return the number (count) of vowels in the given string.

We will consider a, e, i, o, u as vowels for this Kata (but not y).

The input string will only consist of lower case letters and/or spaces. -->

<?php
  
function getCount(string $str): int {
    $vovels=["a", "e", "i", "o", "u"];
    $answear=0;
    for($sign=0;$sign<strlen($str);$sign++){
        if(in_array($str[$sign],$vovels)){
            $answear+=1;
        }
    }
  return $answear; // your code here
}