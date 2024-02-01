<?php
function hash_password($password) {
    // Check if password_hash function is available
    if (function_exists('password_hash')) {
        // Generate a random salt
        $options = [
            'cost' => 12,
        ];
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

        // Return the hashed password
        return $hashed_password;
    } else {
        // Handle the case where password_hash is not available
        die("Password hashing is not supported on this server.");
    }
}

// Traitement du formulaire d'inscription
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données
    $connexion = new mysqli("localhost", "root", "", "test");

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL); // Sanitize email
    $password = hash_password($_POST["password"]); // Note: Il est fortement recommandé de hacher le mot de passe avant de le stocker en base de données.

    // Préparer la requête SQL
    $requete = $connexion->prepare("INSERT INTO user (nom, prenom, email, password) VALUES (?, ?, ?, ?)");

    // Vérifier la préparation de la requête
    if (!$requete) {
        die("La préparation de la requête a échoué : " . $connexion->error);
    }

    // Binder les paramètres
    $requete->bind_param("ssss", $nom, $prenom, $email, $password);

    // Exécuter la requête
    if ($requete->execute()) {
        echo '<div class="alert alert-success" role="alert">Inscription réussie !</div>';
        /* $_SESSION["nom"] = $nom;
        $_SESSION["prenom"] = $prenom;*/
        header("Location: ../front/authentification/login.php");
        exit(); // Make sure to exit after a header redirect
    } else {
        echo '<div class="alert alert-danger" role="alert">Erreur lors de l\'inscription : ' . $requete->error . '</div>';
    }

    // Fermer la connexion
    $requete->close();
    $connexion->close();
}
?>
