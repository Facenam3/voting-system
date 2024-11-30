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
<body>
    <?php
        require_once __DIR__ . "/partials/navbar.php";
    ?>
    
    <div class="container vote">
        <h1 class="text-center mb-3">The Voting System</h1>
        <div class="d-flex justify-content-center aling-items-center">
        <form action="#" method="POST" class="w-75 mt-3">
            <div class="mb-3">
                <label for="category_id" class="mb-3">Voting Category</label>
                <select class="form-select" name="category_id">
                <option selected>Select your category</option>
                <option value="makes_work_fun">Makes Work Fun</option>
                <option value="team_player">Team Player</option>
                <option value="culture_champion">Culture Champion</option>
                <option value="difference_maker">Difference Maker</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="the_nominee" class="mb-3">Eployee</label>
                <select class="form-select" name="the_nominee">
                <option selected>Select your nominee</option>
                <option value="john_doe">John Doe</option>
                <option value="jane_doe">Jane Doe</option>
                <option value="max_schawrz">Max Schwazr</option>
                <option value="johny_depp">Johny Depp</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="voted_by" class="form-label">Voted By</label>
                <input type="text" class="form-control" id="voted_by" placeholder="Enter Your Name">
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