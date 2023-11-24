<?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Vérifier si l'ID a été transmis via le formulaire
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            // Récupérer l'ID à supprimer
            $id_to_delete = $_POST['id'];

            // Connexion à la base de données
            $serveur = "localhost";
            $utilisateur = "root";
            $motDePasse = "Xhendelesse28";
            $baseDeDonnees = "restaurant";

            // Connexion
            $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

            // Vérifier la connexion
            if ($connexion->connect_error) {
                die("Échec de la connexion : " . $connexion->connect_error);
            }

            // Préparer et exécuter la requête de suppression
            $requete_suppression = "DELETE FROM message WHERE id_message = $id_to_delete";
            $resultat = $connexion->query($requete_suppression);

            // Vérifier si la suppression a réussi
            if ($connexion->affected_rows > 0) {
                echo "La ligne a été supprimée avec succès.";
                header("Location: ../admin.php?enregistrement=reussi"); // Redirection vers la page du formulaire
                exit;
            } else {
                echo "Erreur lors de la suppression de la ligne.";
            }

            // Fermer la connexion à la base de données
            $connexion->close();
        } else {
            echo "ID non trouvé pour la suppression.";
        }
    } else {
        echo "Méthode non autorisée pour accéder à cette page.";
    }
?>
