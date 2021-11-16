<?php
session_start();
?>
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
            height: 250px;
            overflow-y: auto;
            position: relative;
        }

        .delete_btn {
            position: absolute;
            top: 0;
            right: 0;
            margin: 5px;
            /* font-size: 6px; */
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: hsl(120 100% 5% / 1);

        }

        ::-webkit-scrollbar-thumb {
            background: hsl(120 50% 50% / 1);
            border-top-right-radius: 100vw;
            border-bottom-left-radius: 100vw;
        }

        .preloader {
            height: 100vh;
            width: 100%;
            z-index: 999999;
            position: fixed;
            background: #fff url("image/loder.gif") no-repeat center center;
            background-size: 200px
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
/*         
.img_gallery{
width: 80%;
margin: 100px auto 50px;
display: grid;
grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
grid-gap: 30px;
}
.img_gallery img{
    width: 100%;
    height: 40vh;
    box-shadow: 0 0 10px  rgba(0, 0,0,0.4);
    transition: .3s linear;

}
.img_gallery img:hover{
    transform: rotate(-15deg) scale(0.8);
    border-radius: 20px;
    transition: .3s linear;
    cursor: pointer;

}

.fullimg_box{
    width: 100%;
    height: 100vh;
    background: rgba(0,0,0,0.9);
    position: fixed;
    top: 0;
    left: 0;
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    overflow: hidden;
}
.fullimg_box img{
    width: 50%;
    min-height: auto;
}
.closeimage{
    position: absolute;
    top: 40px;
    right:40px;
    color: #fff;
    z-index: 1000;
    font-size: 20px;
    cursor: pointer;
}*/
    </style>
</head>

<body>
    <div id="preloader" class="preloader"> </div>

    <?php
    include("assets/_navbar.php");
    ?>
    <div class="container my-4">
        <div class="row  gap-4">
            <?php
            include("assets/_db.php");
            $sql = "SELECT * FROM `diLKSL5tZx`.`my_project`";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="card p-0 box mx-auto col-md-4 col-xx-4">
                        <a href="full_project.php?id=<?php echo $row['sno'] ?>">
                            <img class="shadow card-image-top img-fluid" src="image/projects/<?php echo $row['project_image'] ?>" alt="...">
                        </a>
                        <?php
                        if ($_SESSION['loggedin'] && $_SESSION['user_role'] == '1') {
                        ?>
                            <a href="delete.php?id=<?php echo $row['sno'] ?>&filename=<?php echo $row['project_image'] ?>" class="delete_btn btn btn-sm btn-danger">Del</a>
                        <?php } ?>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <!-- <div class="fullimg_box">
            <img src="image/projects/image1.jpg" class="fullimg" alt="">
            <span class="closeimage" onclick="closeFullImg()">X</span>
        </div>
        <div class="img_gallery">
            <img src="image/projects/image1.png" alt=" image not found" onclick="openFullImg(this.src)">
            <img src="image/projects/image2.png" alt=" image not found" onclick="openFullImg(this.src)">
            
        </div> -->


        <!-- <script>
            let fullImgBox = document.querySelector(".fullimg_box")
            let fullimg = document.querySelector(".fullimg")

            function openFullImg(pic) {
                fullImgBox.style.display = "flex";
                fullimg.src = pic;
            }

            function closeFullImg(pic) {
                fullImgBox.style.display = "none";
            }
        </script> -->
    </div>
    <footer>
        <?php
        include("assets/_footer.php")
        ?>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
        loader.style.display = 'none';
    })
</script>

</html>
