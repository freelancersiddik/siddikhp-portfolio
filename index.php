<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siddikhp.com</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php
    include("assets/_links.php")
    ?>
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            overflow: hidden;
        }

        .home_page {
            width: 100vw;
            min-height: 91vh;
            background: linear-gradient(rgba(0, 0, 0, 0.665), rgba(0, 0, 0, 0.652)),
                url("image/bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            position: relative;
        }

        .home_social_link {
            position: absolute;
            top: 35%;
            left: 0%;
            /* transform: translate(-50%, -50%); */
        }

        .home_social_link i {
            color: aliceblue;
            font-size: 30px;
            cursor: pointer;
            transition: 0.3s;
            margin: 10px 0;
            width: 50px;
            display: block;
        }

        .home_social_link i:hover {
            color: rgb(37, 124, 201);
            transition: 0.3s;
        }

        .details_home {
            margin-top: 15%;
            color: #fff;
        }

        .details_home a:focus {
            outline: unset;
            border: unset;

        }

        .lihgt {
            animation: animate 4s linear infinite;
            display: inline-block;
            
        }
        

        @keyframes animate {
            0%, 19%, 21%, 50%, 66%, 68%, 80%, 92% {
                color: #ffffff;
                text-shadow: none;
            }

            1%, 19.1%, 21.1%, 52.1%, 66.2%, 68.1%, 80.1%, 92.2%,100% {
                color: rgba(11, 244, 252, 0.926);
                text-shadow: 0 0 4px rgba(11, 244, 252, 0.796),
                0 0 5px rgba(11, 244, 252, 0.796),
                0 0 6px rgba(11, 244, 252, 0.796),
                0 0 7px rgba(11, 244, 252, 0.796),
                0 0 8px rgba(11, 244, 252, 0.796),;
            }
        }

        /* medis screen */
        @media screen and (max-width: 767px) {
            .details_home {
                margin-top: 30%
            }
        }

        @media screen and (max-width: 600px) {
            .details_home {
                margin-top: 60%;
            }
        }



        .preloader {
            height: 100vh;
            width: 100%;
            z-index: 999999;
            position: fixed;
            background: #fff url("image/loder.gif") no-repeat center center;
            background-size: 200px
        }
    </style>

</head>

<body>
    <!-- navbar -->
    <div id="preloader" class="preloader">
    </div>
    <?php include("assets/_navbar.php") ?>
    <div class="container-fluid home_page main_box">
        <div class="home_social_link mx-auto d-none d-sm-none d-md-block">
            <div class="link_icons mx-3">
                <a href="https://www.facebook.com/lxsiddikxx" target="_blank" class="text-decoration-none"><i
                        class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/siddik3446/" target="_blank" class="text-decoration-none"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/siddik-hp-06688321b/" target="_blank"
                    class="text-decoration-none"><i class="fab fa-linkedin"></i></a>
                <a href="https://twitter.com/Siddik85293666" target="_blank" class="text-decoration-none"><i
                        class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mx-auto details_home">
                <h1 class="lihgt">Siddikhp</h1>
                <h4>The designer and developer of the website</h4>
                <?php
                if ($_SESSION['loggedin']) {
                ?>
                <a href="about.php" class="btn  mx-2 btn-success rounded-right">More</a>
                <a href="https://www.fiverr.com/" class="btn  mx-2 btn-success rounded-right">Order on Fiverr</a>

                <!-- <a href="#" class="btn mx-2 btn-danger  rounded-left">Login</a> -->
                <?php } else { ?>
                <a href="https://www.fiverr.com/" class="btn  mx-2 btn-success rounded-right">Order on Fiverr</a>
                <a href="_login.php" class="btn mx-2 btn-danger  rounded-left">Login</a>
                <?php } ?>
            </div>

        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function () {
        loader.style.display = 'none';
    })
</script>

</html>