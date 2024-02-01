<?php
session_start(); // Make sure to start the session

include 'config/dbcon.php'; 

if (isset($_POST['register_btn'])) {
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $checkemail = "SELECT email FROM users WHERE email='$email' ";
    $checkemail_run = mysqli_query($con, $checkemail);

    if (mysqli_num_rows($checkemail_run) > 0) {
        // email already exists
        $_SESSION['message'] = "Email already exists.";
        header("location: register.php"); // Fix: use a colon (:) instead of a space after "location"
        exit(0);
    } else {
        $user_query = "INSERT INTO users (nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$password')";
        $user_query_run = mysqli_query($con, $user_query);

        if ($user_query_run) {
            $_SESSION['message'] = "Registration successful!";
            header("Location: login.php"); // Fix: use a colon (:) instead of a space after "Location"
            exit(0);
        } else {
            $_SESSION['message'] = "Something went wrong!";
            header("Location: register.php"); // Fix: use a colon (:) instead of a space after "Location"
            exit(0);
        }
    }
} else {
    header('Location: register.php'); // Fix: use a colon (:) instead of a space after "Location"
    exit(0);
}
?>
