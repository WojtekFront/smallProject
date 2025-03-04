<?php
// Rock Paper Scissors
// Let's play! You have to return which player won! In case of a draw return Draw!.

// Examples(Input1, Input2 --> Output):

// "scissors", "paper" --> "Player 1 won!"
// "scissors", "rock" --> "Player 2 won!"
// "paper", "paper" --> "Draw!"



function rpc ($p1, $p2) {
  if($p1===$p2){
    return "Draw!";
  }

  $beats=[
    'rock'=>'scissors',
    'scissors'=>'paper',
    'paper'=>'rock'
  ];
return ($beats[$p1]===$p2 )? "Player 1 won!" : "Player 2 won!";
}

echo(rpc("scissors", "paper") );
echo(rpc("scissors", "rock" ));
echo(rpc("paper", "paper"));