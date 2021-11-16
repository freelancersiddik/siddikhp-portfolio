<?php
session_start();
// if ($_SESSION['user_role'] === '1' &&    $_SESSION["loggedin"]) {
if ($_SESSION['user_role'] != '1') {
    header("location: index.php");
}

include("assets/_db.php");
$showAlert = false;
if (isset($_POST['insert'])) {
    $image_name = $_FILES["project_image"]['name'];
    $image_size = $_FILES["project_image"]['size'];
    $image_type = $_FILES["project_image"]['type'];
    $image_ten_loc = $_FILES["project_image"]['tmp_name'];
    $image_store = "image/projects/" . $image_name;
    move_uploaded_file($image_ten_loc, $image_store);
    $sql = "INSERT INTO `diLKSL5tZx`.`my_project` (`sno`, `project_image`) VALUES (NULL, '$image_name')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $showAlert = true;
        header("location: portfolio.php");
        exit();
    }else{
        header("location: project_insert.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Insert</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <?php
    include("assets/_links.php")
    ?>
    <style>
        .insert_page {
            width: 100vw;
            height: 100vh;
            background: #000;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>
</head>

<body>
    <div class="container-fluid insert_page">
        <div class="row ">
            <div class=" col-10 col-md-12 mx-auto  bg-danger shadow ">
                <form action="project_insert.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-2">
                        <input type="file" class="form-control mt-5" id="inputGroupFile02" name="project_image" required>
                    </div>
                    <button type="submit" name="insert" class="btn btn-success float-end">Insert</button>
                    <?php if ($showAlert) { ?>
                        <h6>
                            Your Project has been inserted successfuly
                        </h6>
                    <?php } ?>
                    <a class="btn float-start mt-5 btn-danger my-3 " href="index.php">Back To Home </a>

                </form>

            </div>
        </div>
    </div>
</body>

</html>
