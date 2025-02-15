<!-- Write a function that removes the spaces from the string, then return the resultant string.

Examples (Input -> Output): -->

<?php
  
function no_space(string $s): string {
//nowa zmienna która jest tablicą
$new_string="";

// foreach($s as $letter)
for($letter=0;$letter<strlen($a);$letter++){
if($s[$letter]!=" "){
$new_string=$new_string.$s[$letter];
}
}
  return $new_string; 
}
function no_space2(string $s): string{
    return str_replace (" ", "", $s);
}
echo(no_space("8 8 Bi fk8h B 8 BB8B B B  B888 c hl8 BhB fd"));
// "8 8 Bi fk8h B 8 BB8B B B  B888 c hl8 BhB fd" -> "88Bifk8hB8BB8BBBB888chl8BhBfd"
// "8aaaaa dddd r     " -> "8aaaaaddddr"