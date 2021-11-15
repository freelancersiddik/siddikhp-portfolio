<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serives</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <?php
    include("assets/_links.php")
    ?>
    <style>
        .preloader {
            height: 100vh;
            width: 100%;
            z-index: 999999;
            position: fixed;
            background: #fff url("image/loder.gif") no-repeat center center;
            background-size: 200px;
            display: block;

        }

        .card img {
            width: 150px;
            margin: 0 auto;
        }
        body{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>
<div id="preloader" class="preloader"></div>
<?php
include("assets/_navbar.php")
?>

<div class="container">
    <div class="row mt-4 py-5 mx-auto gap-5">
        <?php
        include("assets/_db.php");
        $sql = "SELECT * FROM `service`";
        $result = mysqli_query($conn, $sql);
        $i = 1;

        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="card col-md-3 mx-auto col-xxl-3 col-12 shadow">
                    <img class="img-fluid p-2" src="image/service/service-<?php echo $incre = $i++ ?>.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $row['name'] ?></h3>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
        <?php
            }
        }
        ?>

    </div>
</div>
<footer>
    <?php
    include("assets/_footer.php");
    ?>
</footer>

<body>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    let loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
        loader.style.display = 'none';
    })
</script>

</html>