<?php

class Category extends database 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertCategory($name){
        $pdo = $this->instance;
        $sql = "INSERT INTO category(name) VALUES (:name)";

        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->bindParam(":name", $name);
        $pdo_statement->execute();

        $result = $pdo_statement->rowCount();

        return $result;
    }

    public function getAllCategory() {
        $pdo = $this->instance;
        
        $sql = "SELECT * FROM category";
        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->execute();
        $allCategory = $pdo_statement->fetchAll();

        return $allCategory;
    }
}