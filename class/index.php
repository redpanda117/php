<?php

//making a class 
//when a function is in a class it is refer to as a method
//when something is lable as public in class it means that it is accessable outside the class
//when sommething is protected in class it means that it is not acessable outside the class

class Task {
  //description of the task  
    public $description;
  //task is default to false
    public $completed = false;

    //a constuctor so if you want to make a new task you can
    public function __construct($description){

        $this->description = $description;
    }

    //task is done
    public function complete(){
        $this->completed = true;
    }

    //task is not done
    public function inComplete(){
        $this->completed = false;
    }

}

//making an array of task using the construtor
$tasks = [
    new Task('Vaccum Room'),
    new Task('Work on PHP'),
    new Task('Wash Clothing')
];

//making the first task vaccum room completed is true
$tasks[0]->complete();

require 'index.view.php';





