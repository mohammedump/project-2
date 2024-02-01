<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "blog";
$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    $errorMessage = mysqli_connect_error();
    // Log or display the error message
    error_log("Connection failed: $errorMessage", 0);
    
    // Redirect to the error page
    header("Location: ../errors/dberror.php");
    die();
}
?>
