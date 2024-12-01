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

    public function countVotes() {
        $pdo = $this->instance;
        $sql = "SELECT COUNT(*) as total FROM votes";
        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->execute();
        $result = $pdo_statement->fetch();
        return $result['total'];
    }

    public function getPaginatedVotes($limit, $offset) {
        $pdo = $this->instance;
        $sql = "SELECT v.id, c.name AS category_name, e.name AS employee_name, e.vote_count AS votes_count, 
                v.voted_by, v.comment, v.timestamp
                FROM votes v
                JOIN category c ON v.category_id = c.id
                JOIN employees e ON v.employee_id = e.id
                ORDER BY v.timestamp DESC
                LIMIT :limit OFFSET :offset";
        
        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->bindParam(':limit', $limit, PDO::PARAM_INT);
        $pdo_statement->bindParam(':offset', $offset, PDO::PARAM_INT);
        $pdo_statement->execute();
    
        return $pdo_statement->fetchAll();
    }

    public function getCategoryWinners(){
        $pdo = $this->instance;

        $sql = "SELECT 
                    c.name AS category_name, 
                    e.name AS winner_name, 
                    MAX(e.vote_count) AS total_votes
                FROM employees e
                JOIN votes v ON e.id = v.employee_id
                JOIN category c ON v.category_id = c.id
                GROUP BY v.category_id";

        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->execute();
        
        $result = $pdo_statement->fetchAll();

        return $result;
    }

    function getTopVoters() {
        $pdo = $this->instance;
        $sql = "SELECT 
                    v.voted_by AS voter_name, 
                    COUNT(*) AS vote_count
                FROM votes v
                GROUP BY v.voted_by
                ORDER BY vote_count DESC
                LIMIT 10";
        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->execute();

        $result = $pdo_statement->fetchAll();

        return $result;
    }
}
