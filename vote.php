<?php 

    session_start();
    require_once __DIR__ . '/autoload.php';  

    $employees = $employee->getAllEmployee();
    $categories = $category->getAllCategory();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<body>
    <?php
        require_once __DIR__ . "/partials/navbar.php";
    ?>
    
    <div class="container vote">
        <h1 class="text-center mb-3">The Voting System</h1>
        <div class="d-flex justify-content-center aling-items-center">
            <div id="alert" class="alert alert-success" style="display: none;">
                <button class="close"><span aria-hidden="true">&times;</span></button>
                <span id="alert_message"></span>
            </div>
        <form action="#" method="POST" class="w-75 mt-3" id="addVote">
            <div class="mb-3">
                <label for="category_id" class="mb-3">Voting Category</label>
                <select class="form-select" name="category_id" id="category_id">
            </div>
            <div class="mb-3">
                <label for="employee_id" class="mb-3">Eploye</label>
                <select class="form-select" name="employee_id" id="employee_id" >
            </div>
            <div class="mb-3">
                <label for="voted_by" class="form-label">Voted By</label>
                <input type="text" class="form-control" name="voted_by" id="voted_by" placeholder="Enter Your Name">
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-info btn-lg" value="Submit">
            </div>
        </form>
        </div>
        
    </div>

    <?php
        require_once __DIR__ . "/partials/footer.php";
    ?>
</body>
</html>