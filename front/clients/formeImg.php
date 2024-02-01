<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile Picture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/owl.carousel.min.css" rel="stylesheet">
        <link href="css/owl.theme.default.min.css" rel="stylesheet">
        <link href="css/all.css" rel="stylesheet">
        <link href="css/style.css.zip" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <?php include '../base/bib.php' ?>
        <?php include "../style.php" ?>
    

</head>
<?php
include '../base/header.php';
?>

<body >
    <div class="container mt-5">
    <h2 class="mb-4">Update Profile Picture</h2>
    <form action="../../tretment/Image_tretement/addImage.php" method="post"  enctype="multipart/form-data">
        <input type="hidden" name="nom" value="<?php echo $_SESSION['nom']; ?>">
        <input type="hidden" name="prenom" value="<?php echo $_SESSION['prenom']; ?>">
        <div class="form-group">
            <input type="hidden" class="form-control" name="email1" value="<?php echo $_SESSION['email']; ?>" readonly>
        </div>

        <div class="form-group">
            <label for="image">Choose a new profile picture:</label>
            <input type="file" class="form-control-file" name="image" id="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Update Profile Picture</button>
    </form>
    </div>
    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/5d09a16a00.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5d09a16a00.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>