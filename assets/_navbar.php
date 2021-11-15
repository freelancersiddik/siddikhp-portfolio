<?php
error_reporting(0);
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Siddikhp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-md-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">Portfolio</a>
                    </li>
                    <?php
                    if ($_SESSION['user_role'] != '1' ) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <?php } ?>
                    <?php
                    if ($_SESSION['user_role'] === '1' &&    $_SESSION["loggedin"]) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="project_insert.php">Project insert</a>
                        </li>
                    <?php } ?>
                </ul>
                <?php
                if ($_SESSION["loggedin"]) { ?>
                    <form class="d-flex">
                        <span class="text-white my-auto"><?php echo  $_SESSION["username"] ?> </span>
                        <a href="_logout.php" class="btn  btn-success mx-2">Logout</a>
                    </form>
                <?php } else { ?>
                    <form class="d-flex  ">
                        <a href="_signup.php" class="btn btn-success mx-2">Sign up</a>
                        <a href="_login.php" class="btn btn-success">Login</a>
                    </form>
                <?php } ?>
            </div>
        </div>
    </nav>
</body>

</html>