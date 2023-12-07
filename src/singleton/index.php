<?php

class Database
{
    public static $instance;
    
    public static function getInstance(){
        if(!isset(Database::$instance)) //Lazy initialization
            Database::$instance = new Database();

        return Database::$instance;
        
    }

    private function __construct()
    {
        
    } 

    public function getQuery(){
        return "SELECT * FROM `some_table`";
    }
}

$db = Database::getInstance();

$db2 = Database::getInstance();

var_dump($db);
echo "<br/>";
var_dump($db2);