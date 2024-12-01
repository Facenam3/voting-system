<?php

class Employee extends database 
{

    public function __construct(){
        parent::__construct();
    }

    public function insertEmployee($name){
        $pdo = $this->instance;
        $sql = "INSERT INTO employees (name) VALUES (:name)";

        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->bindParam(":name", $name);
        $pdo_statement->execute();
        $result = $pdo_statement->rowCount();

        return $result;
    }

    public function getAllEmployee() {
        $pdo = $this->instance;
        
        $sql = "SELECT * FROM employees";
        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->execute();
        $allEmployees = $pdo_statement->fetchAll();

        return $allEmployees;
    }
}