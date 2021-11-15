<?php
include("assets/_db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $filename =$_GET['filename'];
    $sqlD = "DELETE FROM `my_project` WHERE `sno`='$id'";
    $result = mysqli_query($conn, $sqlD);
    if ($result) {
        unlink("image/projects/$filename");
        header("location: portfolio.php");
        exit();
    }
}
