<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example user data
$email = "mohammed.sebay@ump.ac.ma";
$plainPassword = "123456";

// Hash the password
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

// Insert the user into the admin table
$sql = "INSERT INTO admin (email, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ss", $email, $hashedPassword);
    if ($stmt->execute()) {
        echo "Admin inserted successfully.";
    } else {
        echo "Error inserting admin: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

$conn->close();
?>
