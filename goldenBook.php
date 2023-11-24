<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire et Tableau</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header a{
            color: black;
        }
        header a:hover{
            color: white;
        }
        #contact:hover{
            background-color: #017AFF;
            color: white;
            border-radius: 15px;
        }
        li{
            text-align: center;
        }
        li:hover{
            color: white;
        }
        header img{
            width: 10%;
            margin-top: -40px;
        }
        footer{
            display: flex;
            flex-direction: column;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php include 'include/navBar.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <?php include 'include/contactNavBar.php';?>
            <div class="col-md-9">
                <!-- Contenu du tableau -->
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Messages</h1>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Message</th>
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
                                $resultat = $connexion->query("SELECT `name`, `email`, `texte` FROM `message`");

                                // Vérifier s'il y a des données à afficher
                                if ($resultat->num_rows > 0) {
                                    // Afficher chaque ligne de résultat
                                    while ($row = $resultat->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['texte'] . "</td>";
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
        </div>
    </div>
    <?php include 'include/script.php'; ?>
</body>
</html>
