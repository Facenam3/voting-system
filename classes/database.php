<?php
abstract class database
{
    protected $instance;

    public function __construct(){
        try {
           $this->instance = new PDO('mysql:host=localhost;dbname=voting-system;', 'root', '', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } catch (PDOException $e) {
            echo 'Something went wrong. Message: ' . $e->getMessage();
            die();
        }
    }
}