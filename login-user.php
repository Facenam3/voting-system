<?php
session_start();
require_once __DIR__ . "/autoload.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){

   if(
    isset($_POST['email']) && !empty($_POST['email']) && 
    isset($_POST['password']) && !empty($_POST['password'])
   ) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $userInstance->authenticate($email, $password);
    
    if($user){
        $_SESSION['email'] = $email;
        $_SESSION['fullname'] = $user['fullname'];
        
        echo json_encode([
            'status' => 'success',
            'message' => "Login Successful"
        ]);
        exit;
    }else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please provide both email and password.'
        ]);
        exit;
    }
   }
}