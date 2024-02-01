<?php
session_start();

if (!isset($_SESSION["email"]) && !isset($_SESSION['password'])) {
    header("Location: ../authentification/login.php");
} else {
    $connexion = new mysqli("localhost", "root", "", "test");

?>
    <?php
    // Assuming $_SESSION["profile"] contains the correct file path
    $imagePath = $_SESSION["profile"];

    // Define the base directory of your application
    $baseDirectory = $_SERVER['DOCUMENT_ROOT'] . "/p-pfe/";

    // Calculate the relative path
    $relativePath = str_replace($baseDirectory, "", $imagePath);

    // Add the "../" to the beginning of the relative path to go up two levels
    $relativePath = "../../" . $relativePath;
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/owl.carousel.min.css" rel="stylesheet">
        <link href="css/owl.theme.default.min.css" rel="stylesheet">
        <link href="css/all.css" rel="stylesheet">
        <link href="css/style.css.zip" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <?php include "../style.php" ?>
        <style>
            video {
                position: fixed;
                top: 50%;
                left: 50%;
                min-width: 100%;
                min-height: 100%;
                width: auto;
                height: auto;
                transform: translate(-50%, -50%);
                z-index: -1;
            }

            .content {
                position: relative;
                top: 376px;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                color: white;
            }
        </style>

    </head>

    <body class="bg-light">
        <?php
        include '../base/header.php';
        ?>
        <video autoplay muted loop>
            <source src="production_id_4828605 (2160p).mp4" type="video/mp4">
            Your browser does not support the video tag.
                
        </video>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 pt-5">
                    <div class="row z-deph-3">
                        <div class="col-sm-4 bg-dark" style="position:relative;">
                            <div class="card-block text-center text-white" style=" position:absolute; top:10%; "><a href="image.php"><i>
                                        <img src="<?php echo $imagePath; ?>" alt="Your Image Alt Text" width="80%" height="60%" style=" border-radius: 50%;"></i></a>
                                <h2 class="font-weight-bold mt-4"></h2>
                                <a href="formeImg.php"> <i class="far fa-edit fa-2x mb-4">
                                    </i></a>
                            </div>
                        </div>
                        <div class="col-sm-8 bg-white"><br>
                            <h3 class="mt-3">INFO</h3>
                            <hr class="badge-dark mt-0 w-250">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Email:</p>
                                    <p class="text-muted"><?php echo $_SESSION['email']; ?></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Tel:</p>
                                    <p class="text-muted">+212 643352155</p>

                                </div>
                            </div>
                            <h4 class="mt-3">Projets</h4>
                            <hr class="bg-dark">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Nom:</p>
                                    <p class="text-muted"><?php echo $_SESSION['nom']; ?></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Prénom:</p>
                                    <p class="text-muted"><?php echo $_SESSION['prenom']; ?></p>

                                </div>
                            </div>
                            <hr class="bg-dark"><a href="../authentification/logout.php">
                                <i class="fa fa-power-off mt-2 fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5d09a16a00.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    </html>

<?php } ?>