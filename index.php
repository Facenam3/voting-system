<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <?php
        require_once __DIR__ . "/partials/navbar.php";
    ?>

    <div class="hero d-flex justify-content-center align-items-center">

    <div class="center box text-center">
        <h1 class="text-black fs-1">Pabau Monthly Nominations</h1>

        <?php 
          if(!empty($_SESSION['email'])){
            echo "<p class='text-dark fs-5 my-2'>Have you cast your vote for the most outstanding employee of the month? Don't miss your chance to make your voice heard and show appreciation for the hard work around you!</p>";
            echo "<a class='btn btn-info' href='vote.php'>Vote Now</a>";
          } else {
            echo "<p class='text-dark fs-5 my-2'>Have you cast your vote for the most outstanding employee of the month? Don't miss your chance to make your voice heard and show appreciation for the hard work around you! Please log in to vote.</p>";
            echo "<a class='btn btn-info' href='login.php'>Login to Vote</a>";
          }
        ?>
    </div>

    </div>

    <?php
        require_once __DIR__ . "/partials/footer.php";
    ?>    
    
  </body>
</html>