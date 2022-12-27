<?php

function fetchAllTasks($pdo){
    
    $statement =$pdo->prepare('SELECT * FROM todos');

    $statement->execute();

    return $storeTasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}