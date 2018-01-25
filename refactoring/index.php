<?php

$query = require 'bootstrap.php';

//getting all task from the todos table in mysql
$tasks = $query->selectAll('todos');

require 'index.view.php';





