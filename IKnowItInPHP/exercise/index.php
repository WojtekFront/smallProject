<?php

require 'functions.php';
require 'conToDatabase.php';
require 'commandSQL.php';
require 'Task.php';

$pdo = connectToDb();

$storeTasks = fetchAllTasks($pdo);









