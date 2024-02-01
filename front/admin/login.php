<?php 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="path/to/your/style.css">
    <?php include '../base/bib.php'?>
    <?php include '../style.php' ?>
</head>

<body>
    <?php include '../base/header.php' ?>
    <div class="container col-md-6 " style=" background-color: #ffffff;box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);border-radius: 10px;padding: 20px;margin-top: 50px;;">
        <div class="col-md-">
        <?php include("message.php"); ?>
            <h2 class="text-center mb-4" style="color: #007bff">Admin Login</h2>
            <form action="logincode.php" method="post">
                <div class="form-group" style="margin-bottom: 20px">
                    <label for="email" name="email" style="font-weight: bold">Email:</label>
                    <input type="email" class="form-control" name="email" required style="border-radius: 5px;">
                </div>
                <div class="form-group" style="margin-bottom: 20px">
                    <label for="password" name="password" style="font-weight: bold">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <button name="login_btn" type="submit" class="btn btn-primary btn-block "style=" background-color: #007bff;border: none;border-radius: 5px;padding: 10px;width: 100%;color: #ffffff;">Connexion</button>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/5d09a16a00.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
