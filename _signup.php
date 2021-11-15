<?php
error_reporting(0);

session_start();
if($_SESSION['loggedin']){
    header("location: index.php");
}
// alert dakanor jonno default value false dawoa hoyacay
$showAlert = false;
$showError = false;
// form method jodi post hoi taholy ai gula hobay
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // data base ar satay connect korar jonno include korci "parsial/_dbconnect.php" 
    include "assets/_db.php";
    // user name jodi post hoi taholy ki hobay tar jonno aigual
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // jodi user database a acay naki sata janar jonno ("SELECT * FROM `users` WHERE `username`='$username'")
    $exitSql = "SELECT * FROM `users` WHERE `username`='$username'";
    // data base ar satay connect korlam $exitSql kay
    $result = mysqli_query($conn, $exitSql);
    // data base a kotogula user acay sata janar jonno 
    $numExistRows = mysqli_num_rows($result);
    // jodi database a aki namay 2/ base usre takay taholay error dakabay    $showError
    if ($numExistRows > 0) {
        $showError = "Username Already Exists";
    }
    // Jodi database a ai namay kuno user na takay taholy noton account kortay parbay 
    else {
        if (($password == $cpassword)) {
            // Create a password hash to protect users from the haker
            $hash = password_hash($password, PASSWORD_DEFAULT);
            // database ar satay username ar password insert korlam
            $sqli = "INSERT INTO `users` ( `username`, `password`,`role`) VALUES ( '$username', '$hash','2')";
            // and connect korlam database ar satay
            $result = mysqli_query($conn, $sqli);
            // jodi database a user insert hoi taholy alert dakhabay
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Password do not match!";
        }
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

    <title>SignUp</title>
    <style>
        .signup_form{
            margin-top: 9%;
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

    <!-- navbar component kay require method diya include kora hoyacay -->
    <?php require "assets/_navbar.php" ?>
    <?php
    // jodi $showAlert sotti hoi taholy ai alert dakhabay
    if ($showAlert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your account is now created and you can Login
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    // jodi error hoi taholy ai alert dakabay
    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error! </strong> ' . $showError . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    ?>
    <!-- form start -->
    <div class="container">
        <div class="row mx-auto my-4">
            <div class="col-md-6 mx-auto signup_form">
                <form action="_signup.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" maxlength="23" class="form-control" id="password" name="password" minlength="4">
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="cpassword" maxlength="23" class="form-control" id="cpassword">
                        <div id="emailHelp" class="form-text">Make sure to type the same password</div>
                    </div>

                    <button type="submit" class="btn btn-success btn-sm ">SignUp</button>
                    <!-- jody ager takay account takay taholay login page a niya jabay -->
                    <a href="_login.php" class="btn btn-primary btn-sm ">Already have an account</a>
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