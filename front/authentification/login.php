<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assetes/images/home.ico" type="image/x-icon">
    <link rel="icon" href="../assetes/images/home.png" type="image/png">

    <?php include '../base/bib.php'; ?>
    <?php include '../style.php'; ?>
</head>

<body>
    <div>
        <?php include '../base/header.php'; ?>
    </div>

    <div class="container col-md-6" style="background-color: #ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; padding: 20px; margin-top: 50px;">
        <form action="../../tretment/connexion.php" method="post" style="display: block;">
            <div class="mb-3">
                <label for="email" class="form-label">Email
                    <input type="email" name="email" id="email" value="" class="form-control" placeholder="Login" >
                </label>
                <?php if (!empty($_SESSION['emailErr'])) { echo $_SESSION['emailErr']; } ?>
            </div>

            <div class="mb-3">
                <label for="pswd" class="form-label">Mot de passe
                    <input type="password" name="password" value="" id="pswwordd" class="form-control" placeholder="Password" >
                </label>
                <?php if (!empty($_SESSION['passwordErr'])) { echo $_SESSION['passwordErr']; } ?>
            </div>

            <div class="mb-3">
                <input type="checkbox" name="check" id="check">
                <label for="check">se souvenir de moi</label>
            </div>

            <div class="mb-3">
                <a href="/p-pfe/front/registration.php" style="color: blue;">Créer un compte !</a>
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: #007bff; border: none; border-radius: 5px; padding: 10px; width: 90%; color: #ffffff;">Se connecter</button>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/5d09a16a00.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
