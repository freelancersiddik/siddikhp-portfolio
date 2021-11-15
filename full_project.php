<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <?php
    include("assets/_links.php")
    ?>

    <style>
        .box {
            min-height: auto;
            padding: 0;
            width: 70vw;
            box-shadow: 0 0 10px 0  #888;
        }
        

        ::-webkit-scrollbar {
            width: 15px;
        }

        ::-webkit-scrollbar-track {
            background: hsl(120 100% 5% / 1);

            /* border-radius: 100vw; */
            /* margin-block: .5rem; */
        }

        ::-webkit-scrollbar-thumb {
            background: hsl(120 50% 50% / 1);
            border-radius: 100vw;
            
        }
        body{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
      
    </style>
</head>

<body>
    <?php
    include("assets/_navbar.php");
    ?>
    <div class="container mt-5">
        <a href="portfolio.php" class="btn btn-dark">Back</a>
        <div class="row  py-4 ">
            <?php
            include("assets/_db.php");
            $id =$_GET['id'];
            $sql = "SELECT `sno`, `project_image` FROM `my_project` WHERE `sno`='$id'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                        <!-- <div class="box p-0"> -->
                            <figure>
                                <img class="box  img-fluid" src="image/projects/<?php echo $row['project_image'] ?>" alt="">
                            </figure>
                        <!-- </div> -->
            <?php
                }
            }
            ?>
        </div>
    </div>
    <footer>
        <?php
            include("assets/_footer.php")
        ?>
    </footer>
</body>

</html>