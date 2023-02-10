<?php 
    require_once('projectsElements/headingP.php')
?>
<?php
class RecursionValue {
    /*
    * newValue - input value from outside;
    * maxValue - default max value;
    * limitValue - another blocker for chceck value, default false
    * arrayValues - table with results
    */
    public $newValue;
    public $maxValue = 1000;
    private $limitValue = false; 
    public $arrayValues=array();
    

    function __construct($newValue){
        $this->newValue = $newValue;
    }

    // Method add value to array until it reaches maxValue = 1000
    public function recursionUp(){
        if( !is_numeric($this->newValue) || $this->newValue <=0){
        echo "Wrong value";
        return;

        }elseif($this->newValue < $this->maxValue && !$this->limitValue){
            if($this->newValue < 1000){
               // echo $this->newValue."<br>";
                array_push($this->arrayValues, $this->newValue);
                $this->newValue += $this->newValue;
                $this->recursionUp($this->newValue);
            }else{
                $this->limitValue =true;
                $this->printValue($this->arrayValues);
            }

        }else{
            $this->printValue($this->arrayValues);
            
        }
    }  
    
    // Method split value
    private function printValue($inputArray){
        $count=1;
        foreach($inputArray as $value){
            echo $count.". ".$value."<br>";
            $count++;
        }
    }
}
$recursionExample = new RecursionValue(1);
 echo $recursionExample->recursionUp();

?>
<?php
    require_once('projectsElements/footerP.php');
?>

