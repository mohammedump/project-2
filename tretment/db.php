<?php
include("configuration.php");

function connectDB() {
    global $conn; // Rendre la connexion accessible à la fonction
    return $conn;
}
?>
