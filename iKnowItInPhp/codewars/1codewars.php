
1. Tekst ma zaczynać się z wielkich liter
<?php
function toJadenCase(string $string): string
{

  $string_table= explode(" ", $string);
  $string_table2="";
  foreach($string_table as $string_words){
    if(strlen($string_table2)==0){
        $string_table2= ucfirst($string_words);
    }else{
        $string_table2= $string_table2." ".ucfirst($string_words);
    }
  }

  return $string_table2;
}
function toJadenCase2(string $string): string
{
  return ucwords($string);
}

$printText = "How can mirrors be real if our eyes aren't real";
print(toJadenCase($printText));
?>

