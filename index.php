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
        <h1 class="text-black fs-1">Welcome to Pabau Voting System</h1>
        <p class="text-white fs-3">If you haven't voted yet for the best working employee in our company don't wait go vote!</p>
        <a class="btn btn-info btn-md text-center"  href="vote.php">Vote</a>
    </div>

    </div>

    <?php
        require_once __DIR__ . "/partials/footer.php";
    ?>    
    
  </body>
</html>