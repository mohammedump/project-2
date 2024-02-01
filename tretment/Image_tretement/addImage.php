<?php
session_start();
// Include totalNav.php
include '../../front/base/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process user details (nom, prenom, and email) as needed
    $nom = isset($_POST["nom"]) ? $_POST["nom"] : '';
    $prenom = isset($_POST["prenom"]) ? $_POST["prenom"] : '';
    $email = isset($_POST["email1"]) ? $_POST["email1"] : '';

    // Check if the file was uploaded without errors
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $projectDirectory = "../../";
        $targetDirectory = $projectDirectory . "assetes/uplodes/";
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
        $uploadOk = 1;

        // Check file size before uploading
       if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow only certain file formats
        $allowedFormats = array("jpg", "jpeg", "png", "gif");
        $fileFormat = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if (!in_array($fileFormat, $allowedFormats)) {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (!file_exists($targetDirectory)) {
                mkdir($targetDirectory, 0777, true);
            }

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";

                // Update user's profile picture filename in the session
                $_SESSION["profile"] = $targetFile;

                // Update user's profile picture filename in the database using prepared statement
                $conn = new mysqli("localhost", "root", "", "test");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Check if the email exists before updating
                $checkEmailSql = "SELECT * FROM user WHERE email = ?";
                $checkEmailStmt = $conn->prepare($checkEmailSql);
                $checkEmailStmt->bind_param("s", $email);
                $checkEmailStmt->execute();
                $checkEmailResult = $checkEmailStmt->get_result();

                if ($checkEmailResult->num_rows > 0) {
                    $updateSql = "UPDATE user SET image = ? WHERE email = ?";
                    $updateStmt = $conn->prepare($updateSql);

                    if ($updateStmt) {
                        $updateStmt->bind_param("ss", $targetFile, $email);
                        if ($updateStmt->execute()) {
                            echo "User profile picture updated successfully.";
                            header("Location: ../../front/clients/profil.php");
                            exit();
                        } else {
                            echo "Error updating profile picture: " . $updateStmt->error;
                        }
                        $updateStmt->close();
                    } else {
                        echo "Error preparing update statement: " . $conn->error;
                    }
                } else {
                    echo "Error: User with email $email not found.";
                }

                $checkEmailStmt->close();
                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Error: " . $_FILES["image"]["error"];
    }
}
?>
