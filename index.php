<?php

require "database/connection.php";

require "task.php";//task file

require "database/queryBuilder.php";


$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todos');

var_dump($tasks);








