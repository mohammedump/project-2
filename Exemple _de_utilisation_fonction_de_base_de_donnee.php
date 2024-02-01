<?php
include("db.php");

// Appel de la fonction connectDB pour obtenir la connexion à la base de données
$connexion = connectDB();

// Maintenant, vous pouvez utiliser $connexion pour effectuer des opérations sur la base de données
// Exemple : exécution d'une requête SQL
$query = "SELECT * FROM votre_table";
$result = $connexion->query($query);

// Traitement des résultats, par exemple, affichage des données
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nom: " . $row["nom"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Aucun résultat trouvé.";
}

// N'oubliez pas de fermer la connexion lorsque vous avez terminé avec elle
$connexion->close();
?>
