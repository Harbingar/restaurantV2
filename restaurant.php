<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>About Us</title>
    <style>
        main{
            display: flex;
            justify-content: center;
        }
        h4, td, tr{
            text-align: center;
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
            <div class="row col-12 justify-content-center">
                <div class="col-12 row justify-content-around pt-4">
                    <div class="col-12 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>Horaires</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">Jours</th>
                                        <th scope="col">Matin</th>
                                        <th scope="col">Soir</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">Lundi</th>
                                        <td>Fermé</td>
                                        <td>17h00 - 23h00</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Mardi</th>
                                        <td>10h30 - 13h30</td>
                                        <td>17h00 - 23h00</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Mercredi</th>
                                        <td>10h30 - 13h30</td>
                                        <td>Fermé</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Jeudi</th>
                                        <td>10h30 - 13h30</td>
                                        <td>17h00 - 23h00</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Vendredi</th>
                                        <td>10h30 - 13h30</td>
                                        <td>17h00 - 23h00</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Samedi</th>
                                        <td>10h30 - 13h30</td>
                                        <td>17h00 - 23h00</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Dimanche</th>
                                        <td>Fermé</td>
                                        <td>Fermé</td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>Maps</h4>
                            </div>
                            <div class="card-body">
                                <iframe class="w-100" src="https://www.google.com/maps/d/u/0/embed?mid=1Y5P50JXxCGVFgwQFyvfNCHEe6HOXo38&ehbc=2E312F&noprof=1" height="330"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>Adresse</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item ml-2">Rue de BeCode 12</li>
                              <li class="list-group-item">1000 - Bruxelles</li>
                              <li class="list-group-item">Belgique</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>Notre Histoire</h4>
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem neque atque dolore placeat voluptatibus commodi iste saepe quaerat non? Beatae eum maiores, quas tenetur iure voluptates corporis nisi eius et.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem neque atque dolore placeat voluptatibus commodi iste saepe quaerat non? Beatae eum maiores, quas tenetur iure voluptates corporis nisi eius et.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem neque atque dolore placeat voluptatibus commodi iste saepe quaerat non? Beatae eum maiores, quas tenetur iure voluptates corporis nisi eius et.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem neque atque dolore placeat voluptatibus commodi iste saepe quaerat non? Beatae eum maiores, quas tenetur iure voluptates corporis nisi eius et.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="bg-secondary text-light justify-content-center">
                <p>Thomas Syben - restaurant-css-framework | BeCode 2023</p>
            </div>
        </footer>
        <?php include 'include/script.php'; ?>
    </body>
</html>