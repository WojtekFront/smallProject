<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'Task.php';
//require 'functions.php';


$pdo = Connection::makeConnection();


$query =  new QueryBuilder($pdo);

$storeTasks = $query->selectAll('todos');
$tasks = $query->selectAll('todos');
require 'index.view.php';











