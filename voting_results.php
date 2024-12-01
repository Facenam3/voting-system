<!-- <?php
  session_start();
?> -->

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
        <h1 class="mb-3">The Voting Results</h1>
        <div class="d-flex justify-content-end">
          <a href="voting_winners.php" class="btn btn-info mx-2">Winners</a>
          <a href="voting_topvoters.php" class="btn btn-info">Top Voters</a>
        </div>
        <div class="d-flex justify-content-center aling-items-center">
          <table class="table table-bordered table-hover mt-4">
              <thead class="table-info">
                  <tr> 
                      <th>Employe</th>
                      <th>Category</th>
                      <th>Voted By</th>
                      <th>Votes</th>
                      <th>Comment</th>
                      <th>Date</th>
                  </tr>
              </thead>
              <tbody id="tbody"></tbody>
          </table>
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        
    </div>

    <?php
        require_once __DIR__ . "/partials/footer.php";
    ?>
</body>
</html>