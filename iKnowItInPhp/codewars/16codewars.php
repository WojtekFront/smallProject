<style>
.karuzela {
  width: 64px;
  height: 64px;
  background-image: url('karuzela.png');
  animation: obrot 25s linear infinite; /* Ustawienie animacji */
}

@keyframes obrot {
  from {
    transform: rotate(0deg); /* Początkowy obrót */
  }
  to {
    transform: rotate(360deg); /* Pełny obrót */
  }
}
</style>
<div class="karuzela"></div>
<?php

// Our football team has finished the championship.

// Our team's match results are recorded in a collection of strings. Each match is represented by a string in the format "x:y", where x is our team's score and y is our opponents score.
// For example: ["3:1", "2:2", "0:1", ...]

// Points are awarded for each match as follows:
// if x > y: 3 points (win)
// if x < y: 0 points (loss)
// if x = y: 1 point (tie)
// We need to write a function that takes this collection and returns the number of points our team (x) got in the championship by the rules given above.

// Notes:
// our team always plays 10 matches in the championship
// 0 <= x <= 4
// 0 <= y <= 4



function points(array $games): int {
  $answear=0;
  foreach($games as $game){
    $score = explode(':',$game);
    if($score[0]>$score[1]){
      $answear += 3;
    }elseif($score[0]===$score[1]){
      $answear += 1;
    }
  }
  return $answear;
}




echo(points(["3:1", "2:2", "0:1"]));


