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
                        <div class="row col-12 p-3 ">
                            <div class="col-12 col-md-6">
                                <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prénom">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Adresse Email</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@adresse.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Votre message ici"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row p-3">
                                <div class="form-floating">
                                    <label for="floatingSelect">Type de message :</label>
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Réservartion</option>
                                    <option value="1">Recommandation</option>
                                    <option value="2">Question ?</option>
                                    <option value="3">Plainte</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade mt-5" id="SendModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <h3 class="mt-3 mb-4 text-center">Email envoyé avec Succès !</h3>
                                <button type="button" class="btn btn-warning col-3 position-absolute top-100 start-50 translate-middle rounded-pill" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#SendModal"><img src="img/send.png" alt="send" class="w-50"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
            <div class="bg-secondary text-light justify-content-center">
                <p>Thomas Syben - restaurant-css-framework | BeCode 2023</p>
            </div>
    </footer>
    <?php include 'include/script.php'; ?>
</body>
</html>
