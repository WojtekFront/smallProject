<?php

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=trening','root','');
} catch (PDOException $e){
    die('Could not connect');
}

$statement =$pdo->prepare('SELECT * FROM todos');

$statement->execute();

$storeTasks = $statement->fetchAll(PDO::FETCH_OBJ);