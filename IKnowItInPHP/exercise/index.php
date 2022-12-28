<?php

require 'database/Connection.php';
require 'database/QuerySql.php';
require 'Task.php';
// require 'functions.php';


$pdo = Connection::connectToDb();

$query = new QuerySql($pdo);

$storeTasks = $query->selectAll('todos');











