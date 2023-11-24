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
        p{
            margin:20px;
        }
        #submit{
            margin-bottom: 30px;
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
                <!-- Contenu du formulaire -->
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Exprimez Vous !!!</h1>
                        <form action="upload/livreUpload.php" method="post">
                            <div class="form-group">
                                <label for="nom">Nom :</label>
                                <input type="text" id="nom" name="nom" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" id="email" name="email" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message">Message :</label>
                                <textarea id="message" name="message" required class="form-control"></textarea>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Envoyer" class="btn btn-primary">
                            </div>
                        </form>
                        <?php
                            if (isset($_GET['enregistrement']) && $_GET['enregistrement'] === 'reussi') {
                                echo "<p class='alert alert-success'>Votre message a été enregistré avec succès !</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/script.php'; ?>
</body>
</html>
