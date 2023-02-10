 <!-- repeating information about object part two-->
<?php
//1) do nothing beceause $variable2 is empty
class ShowMustGoOn{
    //property declaratio PROPERTIES
    public $variable1= "Hello World";
    private $variable2 ="Hello World2";

    // methods declaration METHODS
    public function displayVariable(){
        echo $this->variable2;
    }
}
$obj = new ShowMustGoOn;
//echo $obj->displayVariable();

//2) hmm what is this 

class ShowMustGoOn2 extends ShowMustGoOn{}
class ClassB extends \stdClass{}

function getSomeClass(): string{
    return 'ClassB';
}
//var_dump(new (getSomeClass()));

//3) maybe little error?
// $iHaveGreatIdea = new GratIdea;
// Yes, It's definitle error








?>

