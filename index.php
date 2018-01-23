<?php

require 'task.php';
require 'function.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';





