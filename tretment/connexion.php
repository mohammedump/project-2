<?php
session_start();

function hash_password($password) {
    // Generate a random salt
    $options = [
        'cost' => 12, // You can adjust the cost parameter as needed
    ];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

    // Return the hashed password
    return $hashed_password;
}

function verify_password($input_password, $stored_hashed_password) {
    // Verify the password against the stored hash
    return password_verify($input_password, $stored_hashed_password);
}
// Example usage
$password_to_hash = "secure_password";
$hashed_password = hash_password($password_to_hash);

// Simulate storing the hashed password in a database
// In a real application, you would store this value securely
$stored_hashed_password = $hashed_password;

// Example of verifying a password
$input_password = "secure_password";
if (verify_password($input_password, $stored_hashed_password)) {
    echo "Password is correct!";
} else {
    echo "Incorrect password.";
}

session_start();

$emailErr = $passwordErr = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['email'])) {
        $emailErr = '<div class="callout-danger">Email est requis!!</div>';
        $_SESSION['emailErr'] = $emailErr;
    } else {
        $email = htmlspecialchars($_POST['email']);
    }

    if (empty($_POST['password'])) {
        $passwordErr = '<div class="callout-danger">Password est requis!!</div>';
        $_SESSION['passwordErr'] = $passwordErr;
    } else {
        // Connexion à la base de données
        $connexion = new mysqli("localhost", "root", "", "test");

        // Vérifier la connexion
        if ($connexion->connect_error) {
            die("La connexion à la base de données a échoué : " . $connexion->connect_error);
        }

        // Préparer la requête SQL
        $requete = $connexion->prepare("SELECT * FROM user WHERE email = ?;");

        // Vérifier la préparation de la requête
        if (!$requete) {
            die("La préparation de la requête a échoué : " . $connexion->error);
        }

        // Binder les paramètres
        $requete->bind_param("s", $email);

        // Exécuter la requête
        if ($requete->execute()) {
            $result = $requete->get_result();

            if ($result->num_rows > 0) {
                // Fetch user data
                $user = $result->fetch_assoc();

                // Verify the password
                if (verify_password($_POST['password'], $user["password"])) {
                    // Utilisateur authentifié avec succès
                    // ... (rest of your authentication code)
                    $_SESSION["user_id"] = $user["user_id"];
                    $_SESSION["nom"] = $user["nom"];
                    $_SESSION["prenom"] = $user["prenom"];
                    $_SESSION["email"] = $user["email"];
                    $_SESSION["profile"] = $user["image"];
                    // Redirect after a successful authentication
                    header('location: /p-pfe/front/clients/profil.php');
                    exit();
                } else {
                    $_SESSION['passwordErr'] = '<div class="callout-danger">Mot de passe incorrect!</div>';
                }
            } else {
                $_SESSION['emailErr'] = '<div class="callout-danger">Aucun utilisateur trouvé avec cet e-mail!</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">Erreur lors de l\'authentification : ' . $requete->error . '</div>';
        }

        // Fermer la connexion
        $requete->close();
        $connexion->close();
    }
}


        // Fermer la connexion
        $requete->close();
        $connexion->close();


    // Redirect to login page with error messages
    header('location: /p-pfe/front/authentification/login.php');
    exit();

?>
