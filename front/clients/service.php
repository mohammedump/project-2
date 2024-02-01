<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ../authentification/login.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nom de l'Entreprise - Services</title>

        <!-- Include your CSS stylesheets here -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/owl.carousel.min.css" rel="stylesheet">
        <link href="css/owl.theme.default.min.css" rel="stylesheet">
        <link href="css/all.css" rel="stylesheet">
        <link href="css/style.css.zip" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f8f8f8;
                color: #333;
            }

            header {
                background-color: rgba(0, 0, 0, 0.1);
                color: #fff;
                padding: 1em;
                text-align: center;
            }

            nav {
                background-color: #333;
                color: #fff;
                padding: 1em;
                text-align: center;
            }

            nav a {
                color: #fff;
                text-decoration: none;
                margin: 0 1em;
            }

            section {
                max-width: 800px;
                margin: 2em auto;
                padding: 1em;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            footer {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 1em;
                position: fixed;
                bottom: 0;
                width: 100%;
            }

            .a {
                color: #fff !important;
            }

            /* Add your custom styles here */
            body {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            footer {
                background-color: #333;
                /* Set background color */
                color: #fff;
                /* Set text color */
                text-align: center;
                /* Align text to center */
                padding: 0px;
                /* Add padding */
            }

            body {
                background-color: #f8f9fa;
            }

            .container {
                margin-top: 50px;
            }

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

            /* .top-nav {
                background-color: var(--custom-purple-100);
                padding-top: 10px;
                /* Adjust the top padding */
                padding-bottom: 10px;
                /* Adjust the bottom padding */
                height: 60px;
                /* Set a specific height */
                width: 100%;
                /* Set a specific width, usually 100% for full width */
                /* Add any other styles you need */
            } */
        </style>
        <?php include '../base/bib.php' ?>
        <?php include "../style.php" ?>
    </head>

    <body>
        <?php
        include '../base/header.php';
        ?>
        <div class="body">
            <video autoplay muted loop>
                <source src="production_id_4562021 (1080p).mp4" type="video/mp4">
                Your browser does not support the video tag.
                    
            </video>
            <header>
                <h1>Bibliothèque</h1>
            </header>

            <nav>
                <a href="#">Accueil</a>
                <a href="#">À Propos</a>
                <a href="#">Contact</a>
            </nav>

            <section>
                <h2>Nos Services</h2>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2387.443301393923!2d-1.9422181552579547!3d34.68485648790001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7864984106d6ef%3A0x1d86b33244c4650!2sOujda!5e0!3m2!1sfr!2sma!4v1703954286806!5m2!1sfr!2sma" width="100%" height="400" style="border: 0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>

                <ul>
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <a href="#" class="btn btn-primary">Ajouter un commentaire</a><br><br>
                                <a href="#" class="btn btn-primary">Service 2</a><br><br>
                                <a href="#" class="btn btn-primary">Service 3</a>
                            </div>
                        </div>
                    </div>
                </ul>
        </div>

        </ul>
        <br><br><br>
        </section>
        </div>
        </div>
        <footer>
            <p>&copy; 2023 Bibliothèque. Tous droits réservés.</p>
        </footer>

    </body>
    <script src="https://kit.fontawesome.com/5d09a16a00.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </html>
<?php } ?>