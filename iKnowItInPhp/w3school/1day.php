<?php
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
        passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <br><br><br>";
$number=111;
$float= 12.65;




// $int_cast = (int)$float;
// echo $int_cast;

// var_dump(is_float($float));
// var_dump($text);
// echo strtolower($text);
// echo str_replace(" ", "&nbsp &nbsp &nbsp &nbsp;", $text);
// echo strrev($text);
// echo trim($text);
// print_r( explode(" ", $text));
// echo substr($text, 0,20);
// echo substr($text,10);

class Car{
  public $color;
  public $model;
  public function __construct($color, $model){
    $this->color = $color;
    $this->model = $model;
  }
  public function message(){
    return "My car is a ". $this->color. " " .$this->model. ".";
  }
};

$myCar = new Car("black", "Ford");
// echo $myCar->message();
var_dump($myCar);