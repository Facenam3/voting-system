<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
        require_once __DIR__ . "/partials/navbar.php";
    ?>

<div class="container vote">
        <h1 class="mb-3">The Voting Winners Per Category</h1>
        <div class="d-flex justify-content-center aling-items-center">
          <table class="table table-bordered table-hover mt-4">
              <thead class="table-info">
                  <tr> 
                      <th>Employee</th>
                      <th>Total Votes</th>
                  </tr>
              </thead>
              <tbody id="votertBody"></tbody>
          </table>
          </div>
        
    </div>

    <?php
        require_once __DIR__ . "/partials/footer.php";
    ?>
</body>
</html>