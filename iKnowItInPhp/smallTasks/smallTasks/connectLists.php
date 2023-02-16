<?php 
    require_once('projectsElements/headingP.php')
?>
<h3>W tym zadaniu zostną połączone 3 listy </h3>
<p> Wzorcowy schemat znajduje się na poniższym wykresie pic1.</p>
<figure>
        <img src="projectsElements/uml/addArray.png" alt="wykres" style="width:100%;" title="Visit Computer Hope">
        <figcaption>pic1. Schemat budowy projektu</figcaption>
</figure>
<p> Zadanie zostanie sprawdzone pod kątem:
    <ul>
        <li>wprowadenie 3 list w jednej komendzie;</li>
        <li>powtórne wczytanie i sprawdzenie czy zapamiętuje</li>
    </ul>
</p>





<?php
class ConnectList{
    public $newArray;
    private $oldArray;

    public function __construct($inputArray){
        $this->newArray=$inputArray;        
    }

    public function addArray(){
        foreach($this->newArray as $splitArray){
            var_dump($splitArray);
        }
    }
}

$firstImput = new ConnectList([1,2,3],[4,5,6],[7,8,9]);
$firstImput->addArray();



?>
<?php
    require_once('projectsElements/footerP.php');
?>