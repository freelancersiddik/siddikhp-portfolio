<?php

session_start();
$message_sent = false;
if (isset($_POST["name"]) && ($_POST["email"]) != "" && ($_POST["subject"]) != "" && ($_POST["message"]) != "") {
    // submit the form
    $userName = $_POST["name"];
    $userEmail = $_POST["email"];
    $messageSubject = $_POST["subject"];
    $message = $_POST["message"];



    $html = "<div>
<h5>Name : $userName</h5>
<h5>Email : $userEmail</h5>
<pre> <h5>Message : $message </h5></pre>
</div>";

    include("smtp/PHPMailerAutoload.php");
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true;
    $mail->Username = "mds569092@gmail.com";
    $mail->Password = "@siddikvai88@";
    $mail->setFrom("mds569092@gmail.com");
    $mail->addAddress("mds569092@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = $messageSubject;
    $mail->Body = $html;
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'verify_peer_signed' => false,
    ));
    if ($mail->send()) {
        $message_sent;
        header("location: contact.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form | php</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <?php
    include("assets/_links.php")
    ?>
    <script src="https://www.google.com/recaptcha/api.js" async></script>
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
    </style>
</head>

<body>
    <div id="preloader" class="preloader"></div>
    <?php
    include("assets/_navbar.php")
    ?>
    <div class="container-fluid">
        <?php if ($message_sent) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sent</strong> Your message has been sent successfuly.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } else { ?>
            <form action="<?php $_SESSION['PHP_SELF'] ?>" method="POST">

                <div class="row mt-5 mx-auto py-3">
                    <div class="col-md-5 mx-auto col-xxl-5">
                        <div class="mb-3">
                            <label for="name" class="form-label">Enter Name</label>
                            <input type="text" disabled value="<?php if ($_SESSION['user_role'] != '1') {
                                                                    echo $_SESSION['username'];
                                                                } ?>" class="form-control <?= $invalied_class_name ?? "" ?>" id="name" name="name" aria-describedby="emailHelp" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Title</label>
                            <input type="text" class="form-control" id="subject" name="subject" aria-describedby="emailHelp" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-5 col-xxl-5 mx-auto">
                        <div class="mb-3">
                            <label for="message" class="form-label">Description</label>
                            <textarea class="form-control" name="message" id="message" rows="4" autocomplete="off"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="6LcByv4cAAAAADona7y7GAL67h_v2PXqOzWI8ZsP"></div>
                        </div>
                    </div>
                    <?php
                    if ($_SESSION['loggedin'] && $_SESSION['user_role'] == '2') {
                    ?>
                        <button type="submit" class="w-25 mx-auto mt-3 btn btn-primary">Submit</button>
                    <?php } else { ?>

                        <button type="submit" class="w-25 mx-auto mt-3 btn btn-primary" disabled><?php if ($_SESSION['user_role'] == '1') {
                                                                                                        echo "Owner can't main ";
                                                                                                    } else {
                                                                                                        echo "login first";
                                                                                                    } ?> </button>
                    <?php } ?>
                </div>
            </form>
        <?php } ?>
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