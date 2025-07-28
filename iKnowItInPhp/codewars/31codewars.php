
<?php
/* When provided with a letter, return its position in the alphabet.
Input :: "a"
Output :: "Position of alphabet: 1"
*/
function position(string $alphabet):string
{
    if (strlen($alphabet) !==1 || !ctype_alpha($alphabet)){
        return "";
    }
    $answer = ord($alphabet) - ord("a") +1;

    return "Position of alphabet: {$answer}";
}



// echo position("missf");
echo position("wrap");

