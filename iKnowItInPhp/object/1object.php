 <!-- repeating information about object  -->
<?php
class Show{
    function showText(){
        // do nothing
        // echo "Hello World"; 
    } 
}
$myObject = new show;
$myObject->showText();


// do nothing
// $obj = (object) array ("text"=>"Hello World");
// var_dump(isset($obj->{"text"}));
// echo "<br>";
// var_dump(key($obj));
// echo "<br>";
// var_dump($obj->{"text"});
// echo "<br>".$obj->{"text"};

$obj2 = (object)["userName"=>"Marek121"];
var_dump(key($obj2));
echo"<br>";
var_dump($obj2->{"userName"});








?>

