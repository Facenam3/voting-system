<?php

class User extends database 
{
    public function __construct(){
        parent::__construct();
    }

    public function insertUsers($fullname, $email, $password){
        $pdo = $this->instance;
        $sql = "INSERT INTO users (fullname, email, password) VALUES (:fullname, :email, :password)";

        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->bindParam(":fullname", $fullname);
        $pdo_statement->bindParam(":email", $email);
        $pdo_statement->bindParam(":password", $password);
        $pdo_statement->execute();

        $result = $pdo_statement->rowCount();

        return $result;
    }

    public function authenticate($email, $password){
        $pdo = $this->instance;
        $sql = "SELECT * FROM users WHERE email = :email";
        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->bindParam(":email", $email);
        $pdo_statement->execute();

        $user = $pdo_statement->fetch();

        if(!empty($user) && password_verify($password, $user['password'])) {
            return true;
        }

        return false;

    }

    public function findUserByEmail($email) {
        $pdo = $this->instance;
        $sql = "SELECT * FROM users WHERE email = :email";
        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->bindParam(":email", $email);
        $pdo_statement->execute();

        $user = $pdo_statement->fetch();

        return $user;
    }
}