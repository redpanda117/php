<?php

$task = [
        'task' => 'Groceries Shopping',
        'due' => 'January 12,2018',
        'assigned_to' => 'Tina',
        'completed' => false,
        'urgent' => true,
        'repeat' => true
];

//pushing a new description into the associative array
$task['location'] = "Walmart";

//removing something from the array
unset($task['repeat']);

//you canont echo out an array. Echo can only echo a string.
//so you will var_dump to call for an array
    //so simply dump all the value 
// one option to make it more readable is use echo '<pre>' 

echo '<pre>';

var_dump ($task);

echo '</pre>';


//die means end task
//so if this is here it will read stop here and not read the index.view.php file 
//how it will be use with this array
//die(var_dump ($task));

require 'index.view.php';





