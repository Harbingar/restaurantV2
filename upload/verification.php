<?php
    // Connexion à la base de données (à adapter selon tes paramètres)
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe_bd = "Xhendelesse28";
    $nom_bd = "restaurant";

    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe_bd, $nom_bd);

    // Vérification de la connexion
    if ($connexion->connect_error) {
        die("Connexion échouée : " . $connexion->connect_error);
    }

    // Vérifier si les données POST existent et ne sont pas vides
    if (isset($_POST['nom']) && isset($_POST['motDePasse'])) {
        // Récupération des informations envoyées par le formulaire
        $nom_utilisateur = $_POST['nom'];
        $mot_de_passe = $_POST['motDePasse'];

        // Requête pour récupérer les informations de l'utilisateur depuis la base de données
        $sql = "SELECT * FROM admin WHERE nom = '$nom_utilisateur' AND mot_de_passe = '$mot_de_passe'";
        $resultat = $connexion->query($sql);

        if ($resultat && $resultat->num_rows > 0) {
            // Utilisateur trouvé, rediriger vers la page admin
            header("Location: ../admin.php");
            exit(); // Assure une redirection immédiate
        } else {
            // Aucun utilisateur correspondant, afficher un message d'erreur
            echo "";
            header("Location: ../connect.php?enregistrement=false"); // Redirection vers la page du formulaire
            exit;
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }

    // Fermer la connexion à la base de données
    $connexion->close();
?>
