<?php

//php data object function
function connectToDb(){
try{
    return new PDO('mysql:host=127.0.0.1; dbname=todolist','root','bn19');
   }catch (PDOException $e){
       //catch will get any exceptional erros and tell you what wrong 
       die($e->getMessage());
   }
}   

//getting all the task in database
function fetchAllTasks($pdo){
    //tell php what table in the database is to be used
    $statement = $pdo->prepare('select * from todos');
    //getting the data from the table
    $statement->execute();
    
    //fetch data from table
    //becarefull if your database is huge
    //fetch all data into a class called Task
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    
    }