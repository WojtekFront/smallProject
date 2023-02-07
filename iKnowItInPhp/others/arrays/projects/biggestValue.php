<?php 
    require_once('projectsElements/headingP.php')
?>
<?php
    echo '<Br>
        In the array =[1,10,2,3,4,5,6,7,8,9,0] we are looking for the largest value.';
    $enternedValue = [1,10,2,3,4,5,6,7,8,9,0];


    function printBiggestNumber($arrayInput){
        $returnValue = 0;
        for ($i = 0; $i < count($arrayInput); $i++){
            
            $currentValue = $arrayInput[$i];
        
            if($returnValue == 0 ){
                $returnValue = $currentValue;
            }
        
            if($returnValue < $currentValue){
                $returnValue = $currentValue;
        
            }
        }
    echo "<br>The biggest value is: ".$returnValue;
    }

printBiggestNumber($enternedValue);

?>
<?php
    require_once('projectsElements/footerP.php');
?>