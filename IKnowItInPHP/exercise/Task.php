<?php 
class Task {
    private $description;
    private $completed;

    public function getDescription(){
        return $this->description;
    }

    public function getCompleted(){
        return $this->completed;
    }
}