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
     <div class="container vote">
        <h1 class="text-center mb-3">Login</h1>
        <div class="d-flex justify-content-center aling-items-center">
            <form action="#" method="POST" class="w-50 mt-3" id="loginForm">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your Email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-info btn-lg" value="Login">
                </div>
            </form>
        </div>
        
    </div>

    <?php
        require_once __DIR__ . "/partials/footer.php";
    ?>    
    
  </body>
</html>