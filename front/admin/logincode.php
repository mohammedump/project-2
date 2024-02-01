<?php 
session_start();
include("config\dbcon.php");
if(isset($_POST["login_btn"])){
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
    $query_run = mysqli_query($con, $login_query); // Fix: Assign the result to $query_run
    if(mysqli_num_rows($query_run) > 0)
    {
        $row = mysqli_fetch_array($query_run);

        // Authenticating Logged In User
        $_SESSION['authentication'] = true;

        // Storing Authenticated User data in Session
        $_SESSION['auth_user'] = [
            'user_id'=>$row['id'],
            'user_fullname'=>$row['fullname'],
            'user_email'=>$row['email'],
        ];

        $_SESSION['message'] = "You are Logged In Successfully"; //message to show
        header("Location: index.php");
        exit(0);
    }
    else {
        $_SESSION["message"] = "Invalid email or password";
        header("location: login.php");
        exit(0);
    }
}
else {
    $_SESSION["message"] = "You are not allowed to access this file";
    header("location: login.php");
    exit(0);
}
?>
