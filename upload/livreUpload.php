<?php
    include '../include/dbInfos.php';

    // Connexion
    $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("Échec de la connexion : " . $connexion->connect_error);
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Récupérer les données du formulaire
        $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $message = isset($_POST['message']) ? $_POST['message'] : "";

        // Vérifier si les données sont non vides avant l'insertion
        if (!empty($nom) && !empty($email) && !empty($message)) {
            // Récupérer la date actuelle
            $dateEnvoi = date('Y-m-d H:i:s');

            // Requête d'insertion dans la base de données (utilisation de requêtes préparées pour éviter les problèmes de sécurité)
            $insertion = $connexion->prepare("INSERT INTO `message` (`date`, `name`, `email`, `texte`) VALUES (?, ?, ?, ?)");
            $insertion->bind_param("ssss", $dateEnvoi, $nom, $email, $message);            

            if ($insertion->execute()) {
                echo "Enregistrement effectué avec succès";
                header("Location: ../form.php?enregistrement=reussi"); // Redirection vers la page du formulaire
                exit;
            } else {
                echo "Erreur : " . $insertion->error;
            }
        } else {
            echo "Veuillez remplir tous les champs du formulaire.";
        }
    }

    // Fermer la connexion à la base de données
    $connexion->close();
?>
