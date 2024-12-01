<?php

require_once __DIR__ . "/autoload.php";

if($_SERVER['REQUEST_METHOD'] === "POST") {

    $output = array('error' => false);

    if(
        isset($_POST['category_id']) && !empty($_POST['category_id']) && 
        isset($_POST['employee_id']) && !empty($_POST['employee_id']) && 
        isset($_POST['voted_by']) && !empty($_POST['voted_by']) && 
        isset($_POST['comment']) && !empty($_POST['comment'])
    ) {
        $category_id = $_POST['category_id'];
        $employee_id = $_POST['employee_id'];
        $voted_by = $_POST['voted_by'];
        $comment = $_POST['comment'];

        $voting = $votes->insertVote($category_id,$employee_id,$voted_by, $comment);
    
        if($voting){
           
            $output['message'] = "You have voted successfully.";
        } else {
            $output['error'] = true;
            $output['message'] = "Something went wrong. You can not vote now.";
        }
    }
}

