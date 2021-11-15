<?php
error_reporting(0);

session_start();
if ($_SESSION['loggedin']) {
    header("location: index.php");
}
// alert dakanor jonno
$login = false;
$showError = false;
// form method jodi post hoi taholy ai gula hobay
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // data base ar satay connect korar jonno include korci "parsial/_dbconnect.php" 
    include "assets/_db.php";

    $username = $_POST["username"];
    $password = $_POST["password"];
    // database takay username ar password select korlam jatay dubble kou username acay naki janar jonno
    // $sqli = "Select * from users where username='$username' AND password='$password'";
    $sqli = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sqli);
    // jodi dubble username takay tar jonno
    $num = mysqli_num_rows($result);
    // jodo user == 1 hoi taholy login korabay 
    if ($num == 1) {
        // jahatu user == 1 tai login true kora hoyacy
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row["password"])) {
                $login = true;
                // session start kora hoyacay
                session_start();
                // session ar loggedin = true
                $_SESSION["loggedin"] = true;
                // session ar username = database ar username 
                $_SESSION["username"] = $username;
                $_SESSION['user_role'] = $row['role'];
                // jodi sob tik takay taholay takay ai address a patiya dou
                header("location: index.php");
            } else {
                $showError = "Invalid Credential!";
            }
        }
    } else {
        $showError = "Invalid Credential!";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Login</title>
    <style>
        .login_form {
            margin-top: 12%;
        }

        .preloader {
            height: 100vh;
            width: 100%;
            z-index: 999999;
            position: fixed;
            background: #fff url("image/loder.gif") no-repeat center center;
            background-size: 200px;
            display: block;

        }
    </style>
</head>

<body>
    <div id="preloader" class="preloader"></div>

    <?php require "assets/_navbar.php" ?>
    <?php
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You are logged in
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error! </strong> ' . $showError . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    ?>
    <!-- form start -->
    <div class="container">
        <div class="row mx-auto login_form">
            <div class="col-md-6 mx-auto">
                <form action="_login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Login</button>
                    <a href="_signup.php" class="btn btn-primary btn-sm">Create Account</a>

                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    let loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
        loader.style.display = 'none';
    })
</script>

</html>