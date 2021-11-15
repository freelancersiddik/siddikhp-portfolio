<?php
    // $server ="localhost";
    // $username ="root";
    // $password ="";
    // $databse ="siddikhp";

    // remote datbase connection
    $server ="remotemysql.com";
    $username ="diLKSL5tZx";
    $password ="YoILhBizc8";
    $databse ="diLKSL5tZx";
    $conn = mysqli_connect($server,$username,$password,$databse);
    if(!$conn){
        echo "Database Not Connected Properly";
    }
