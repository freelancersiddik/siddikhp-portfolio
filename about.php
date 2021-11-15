<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>About</title>
    <?php
    include("assets/_links.php")
    ?>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div id="preloader" class="preloader">
    </div>
    <?php
    include("assets/_navbar.php");
    ?>
    <div class="container-fluid about mb-4">
        <h3 class="text-center mt-3 ">About me</h3>
        <hr class="about_br mb-4">
        <div class="row mt-5">
            <div class="col-md-4 col-xxl-4 col-12 mx-sm-auto">
                <figure>
                    <img src="image/about.jpg" class="img-fluid shadow" alt="">
                </figure>
            </div>
            <div class="col-md-8 col-xxl-8 col-12">
                <h2 class="fs-3  user_name text-success mb-4">Designer and Developer</h2>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <span class=" d-block fs-4 span_hover  mb-md-3 mb-3 mb-xxl-3"><i class="fas fa-chevron-right"></i> Birthday : <span class="fs-5">15 Feb 2004</span> </span>
                        <span class=" d-block fs-4 span_hover  mb-md-3 mb-3 mb-xxl-3"><i class="fas fa-chevron-right"></i> Website : <span class="fs-5">example@gamil.com</span> </span>
                        <span class=" d-block fs-4 span_hover  mb-md-3 mb-3 mb-xxl-3"><i class="fas fa-chevron-right"></i> Phone : <span class="fs-5">+880 16216 75233</span> </span>
                        <span class=" d-block fs-4 span_hover  mb-md-3 mb-3 mb-xxl-3"><i class="fas fa-chevron-right"></i> City : <span class="fs-5">Uttara Dhaka, Bangladesh</span> </span>


                    </div>
                    <div class="col-md-6 col-12">
                        <span class=" d-block fs-4 span_hover  mb-md-3 mb-3 mb-xxl-3"><i class="fas fa-chevron-right"></i> Age : <span class="fs-5">17 +</span> </span>
                        <span class=" d-block fs-4 span_hover  mb-md-3 mb-3 mb-xxl-3"><i class="fas fa-chevron-right"></i> Language : <span class="fs-5">Bangla and English</span> </span>
                        <span class=" d-block fs-4 span_hover  mb-md-3 mb-3 mb-xxl-3"><i class="fas fa-chevron-right"></i> Email : <span class="fs-5 ">mds569092@gmail.com</span> </span>
                        <span class=" d-block fs-4 span_hover  mb-md-3 mb-3 mb-xxl-3"><i class="fas fa-chevron-right"></i> Education : <span class="fs-5">10<sup>th</sup> Student</span> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="skills" class="skills section-bg my-5">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="section-title">
                <h2 class="">Skills</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row skills-content ">

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">HTML <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">CSS <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">PHP <i class="val">70%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">MYSQL <i class="val">70%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">React <i class="val">60%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                    </div>
                    <div class="progress">
                        <span class="skill">Nodejs <i class="val">60%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
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