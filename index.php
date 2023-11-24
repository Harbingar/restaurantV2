<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Welcome to the restaurant</title>
    <style>
        main{
            display: flex;
            justify-content: center;
        }
        .jumbotron img{
            width: 200px;
            margin-top: -100px;
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
        <main>
            <div class="modal fade mt-5" id="cookie">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Cookie setting</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Accepter les cookies de ce site pour une expérience plus personelle.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Accepter</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Refuser</button>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-around col-12">
                <div class="p-5 text-center bg-image rounded-3" style="background-image: url('img/bigLogo.png'); height: 500px; background-position: center; background-repeat: no-repeat;">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white mt-1">
                            <div class="jumbotron mt-5">
                                <img src="img/TS.png" alt="logo">
                                <h1 class="pt-3">Welcome To the Restaurant</h1>
                                <div class="mt-1">
                                    <a class="btn btn-outline-light btn-lg mt-5" href="menu.php" role="button">Voir Menu</a>
                                    
                                </div>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cookie">Voir Cookie</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    <div class="card col-12 col-md-5 mt-3">
                        <img src="img/gallerie.jpg" class="card-img-top mt-2" alt="Event">
                        <div class="card-body">
                          <h5 class="card-title">Gallerie</h5>
                          <p class="card-text">Visiter notre gallerie de nos délicieux plâts !!!</p>
                          <a href="pictures.html" class="btn btn-danger">Visit Now</a>
                        </div>
                    </div>
                    <div class="card col-12 col-md-5 mt-3">
                        <img src="img/tables.jpg" class="card-img-top mt-2" alt="More">
                        <div class="card-body">
                          <h5 class="card-title">Le restaurant</h5>
                          <p class="card-text">Retrouvez toutes nos informations juste ici</p>
                          <a href="restaurant.html" class="btn btn-info">View More</a>
                        </div>
                    </div>
            </div>
        </main>
        <footer>
            <div class="bg-secondary text-light">
                <p>Thomas Syben - restaurant-css-framework | BeCode 2023</p>
            </div>
        </footer>
        <?php include 'include/script.php'; ?>
    </body>
</html>