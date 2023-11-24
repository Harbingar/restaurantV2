<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'OR - Formulaire</title>
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
        body {
            background-color: #f8f9fa;
        }
        .login-form {
            width: 300px;
            margin: 50px auto;
        }
        button{
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <?php include 'include/contactNavBar.php';?>
            <div class="col-md-9">
                <!-- Contenu du formulaire -->
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Connexion</h2>
                        <form action="upload/verification.php "method="post">
                            <div class="form-group">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="text" class="form-control" name="nom" id="username" placeholder="Entrez votre nom d'utilisateur" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" name="motDePasse" id="password" placeholder="Entrez votre mot de passe" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                            <?php
                                // Vérifier si un enregistrement réussi est signalé dans l'URL
                                if (isset($_GET['enregistrement']) && $_GET['enregistrement'] === 'false') {
                                    echo "<p class='alert alert-danger'>User ou Mot de passe incorrect !</p>";
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>