<?php

class QueryBuilder{
    protected $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table){
    //tell php what table in the database is to be used
    $statement = $this->pdo->prepare("select * from {$table}");
    //getting the data from the table
    $statement->execute();
    //fetch data from table
    //becarefull if your database is huge
    //fetch all data into a class 
    return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}