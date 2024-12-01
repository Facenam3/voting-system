<nav class="navbar ">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="https://imgs.search.brave.com/9lZWAQTZppoXabCMAy4fuTUgZ_uBUm_UE6r1lBAGrlU/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/c29mdHdhcmV3b3Js/ZC5jby9hc3NldHMv/c29mdHdhcmUvbG9n/by9wYWJhdS5wbmc" height="65px" width="150px" alt="">
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item ">
                <a class="nav-link text-black link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="voting_results.php">Voting Results</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-black link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="vote.php">Vote</a>
            </li>

            <?php
                 if (isset($_SESSION['email']) && $_SESSION['email']) 
                {                   
                     echo " <li class='nav-item'><a class='btn btn-info mx-2' href='login.php'>Logout</a></li> ";
           
                } else {

                    echo " <li class='nav-item'><a class='btn btn-info mx-2' href='logout.php'>Login</a></li> ";
                }
            ?>
        </ul>
    </div>
</nav>