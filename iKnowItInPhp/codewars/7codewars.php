<!-- Write a function that takes an array of words and smashes them together into a sentence and returns the sentence. 
 You can ignore any need to sanitize words or add punctuation, but you should add spaces between each word. Be careful, there shouldn't be a space at the beginning 
 or the end of the sentence! -->

 <?php
 function smash(array $words): string {
    
    $sentence="";
    foreach( $words as $word){
      $sentence .=($sentence==="" ? "": " "). $word;
    }
  return $sentence;
}

function smash2(array $words): string {
    return implode(" ", $words);
}
