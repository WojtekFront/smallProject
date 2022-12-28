<?php

class QuerySql{

   protected $pdo;

public function __constructro(PDO $pdo){
    $this->pdo = $pdo;
}

    public function selectAll($table){
        
        $statement =$this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();

        return  $statement->fetchAll(PDO::FETCH_CLASS);
    }
}