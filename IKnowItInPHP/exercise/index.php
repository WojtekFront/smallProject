<?php
require 'functions.php';
//require 'index.view.php';


class Task {
    private $description;

    public $completed;


    function __construct($description, $completed = false){
        $this->description = $description;
        $this->completed = $completed;
    }


    public function getDescription(){
        return $this->description;
    }

    public function isComplete(){
        return $this->completed = true;
    }


}

$storeTasks = [
 new Task('Hello World',false),
 new Task('Go to store',false),
 new Task('Go to store',false),
];


