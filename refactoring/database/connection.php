<?php

class Connection {
//static method is good when you just need to run a logic    
    public static function make(){
        try{
            return new PDO('mysql:host=127.0.0.1; dbname=todolist','root','bn19');
           }catch (PDOException $e){
               //catch will get any exceptional erros and tell you what wrong 
               die($e->getMessage());
           }
        }   
        
    }

