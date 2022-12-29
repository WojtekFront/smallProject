<?php 
class Task {
    public $description;
    public $completed;

    public function getDescription(){
        return $this->description;
    }

    public function getCompleted(){
        return $this->completed;
    }
}