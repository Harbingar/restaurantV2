<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'OR</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #contact:hover{
            background-color: #017AFF;
            color: white;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Admin Zone</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="contact" href="admin.php" role="tab">Gestion Golden Book</a>
                    <a class="nav-link" id="contact" href="#" role="tab">Gestions Images</a>
                    <a class="nav-link" id="contact" href="contact.php" role="tab">Quitter</a>
                </div>
            </div>
            <div class="col-md-8">
                <?php
                    // Vérifier si un enregistrement réussi est signalé dans l'URL
                    if (isset($_GET['enregistrement']) && $_GET['enregistrement'] === 'reussi') {
                        echo "<p class='alert alert-success'>Le message a été supprimé avec succès !!!</p>";
                    }
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'include/dbInfos.php';

                        // Connexion
                        $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

                        // Vérifier la connexion
                        if ($connexion->connect_error) {
                            die("Échec de la connexion : " . $connexion->connect_error);
                        }

                        // Récupérer les données de la base de données
                        $resultat = $connexion->query("SELECT `id_message`,`date`,`name`, `email`, `texte` FROM `message`");

                        // Vérifier s'il y a des données à afficher
                        if ($resultat->num_rows > 0) {
                            // Afficher chaque ligne de résultat
                            while ($row = $resultat->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['date'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['texte'] . "</td>";
                                // Ajout du bouton de suppression
                                echo "<td><form action='upload/deleteLigne.php' method='post'><input type='hidden' name='id' value='" . $row['id_message'] . "'><input type='submit' value='Supprimer' class='btn btn-danger'></form></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>Aucune donnée à afficher.</td></tr>";
                        }

                        // Fermer la connexion à la base de données
                        $connexion->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS (facultatif si vous n'utilisez pas de fonctionnalités Bootstrap JavaScript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
