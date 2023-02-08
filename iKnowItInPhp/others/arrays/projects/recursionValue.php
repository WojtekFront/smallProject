<?php 
    require_once('projectsElements/headingP.php')
?>
<?php
class RecursionValue {
    /*
    * startValue - input value from outside;
    * maxValue - default max value;
    * limitValue - another blocker for chceck value, default false
    * arrayValues - table with results
    */


    public $startValue;
    public $maxValue = 1000;
    private $limitValue = false; 
    private $arrayValues =[];
    private $newValue;

    function __construct($startValue){
        $this->startValue = $startValue;
    }

    // Method add value to array until it reaches maxValue = 1000
    public function recursionUp(){
    if(empty($this->newValue)){
        $this->newValue += $this->startValue;
        $this->recursionUp($this->newValue);
    }elseif($this->newValue < $this->maxValue && $this->limitValue){
        $this->newValue += $this->newValue;
        $this->recursionUp($this->newValue);

    }else{
        echo $this->newValue;
        
    }
}
}
$recursionExample = new RecursionValue(10);
 echo $recursionExample->recursionUp();

?>
<?php
    require_once('projectsElements/footerP.php');
?>

