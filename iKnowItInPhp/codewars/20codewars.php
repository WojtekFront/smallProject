<?php 

// Kids drink toddy.
// Teens drink coke.
// Young adults drink beer.
// Adults drink whisky.
// Make a function that receive age, and return what they drink.

// Rules:

// Children under 14 old.
// Teens under 18 old.
// Young under 21 old.
// Adults have 21 or more.
// Examples: (Input --> Output)

// 13 --> "drink toddy"
// 17 --> "drink coke"
// 18 --> "drink beer"
// 20 --> "drink beer"
// 30 --> "drink whisky"

function people_with_age_drink(int $old): string {
  if(14 > $old){
    return "drink toddy";
  }
  if(18 > $old){
    return "drink coke";
  }
  if(21 > $old){
   return "drink beer";
  }
  if(21 <= $old){
    return "drink whisky";
  }
}

echo(people_with_age_drink(11)."<br>");
echo(people_with_age_drink(17)."<br>");
echo(people_with_age_drink(18)."<br>");
echo(people_with_age_drink(20)."<br>");
echo(people_with_age_drink(21)."<br>");



