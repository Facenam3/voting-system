<?php

class Votes extends database 
{
    public function __construct(){
        parent::__construct();
    }

    public function insertVote($category_id, $employee_id, $voted_by, $comment){
        $pdo = $this->instance;
        $sql = "INSERT INTO votes (category_id, employee_id, voted_by, comment) VALUES (:category_id, :employee_id, :voted_by, :comment)";

        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->bindParam(":category_id", $category_id);
        $pdo_statement->bindParam(":employee_id", $employee_id);
        $pdo_statement->bindParam(':voted_by', $voted_by);
        $pdo_statement->bindParam(':comment', $comment);
        $pdo_statement->execute();

        $update = "UPDATE employees SET vote_count = vote_count + 1 WHERE id = :employee_id";
        $update_statement = $pdo->prepare($update);
        $update_statement->bindParam(":employee_id", $employee_id);
        $update_statement->execute();

        $result = $pdo_statement->rowCount();

        return $result;
    }

    public function getVotes(){
        $pdo = $this->instance;
        $sql = "SELECT * FROM votes";

        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->execute();

        $allVotes = $pdo_statement->fetchAll();

        return $allVotes;
    }
}
