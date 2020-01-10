<?php
require_once('../Controler/ControlerSQL.php');
$formations = all_formation();
var_dump($formations);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
    <!-- Link contact CSS -->
    <title>Community Alaji</title>
    <style>
        body,
        html {
            height: 100%;
        }

        .bg {
            /* The image used */
            background: linear-gradient(rgba(255, 255, 255, .5), rgba(255, 255, 255, .5)), url("../assets/img/Background_Formations.jpg");
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<!--/.Navbar -->

<body>
    <header>
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark border-bottom" style="background-color: #FDD835">
            <a class="navbar-brand" href="index.php"><img style="background-color: white; border-radius:200px;padding:5px;width:70px;" src="https://nsa40.casimages.com/img/2020/01/10/200110014602150184.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn-link rounded-pill" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Formations</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item waves-light" href="#">Toutes les formations</a>
                            <a class="dropdown-item waves-light" href="#">Formations par catégories</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link waves-light btn-link rounded-circle" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-light btn-link rounded-circle" href="connexion.php">Connexion</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--/.Navbar -->
    <main class="bg">

        <div class="text-center">
            <button type="button" class="d-inline-block btn btn-#fdd835 yellow darken-1 animated fadeIn " style="width: 300px;height:120px;">Formations</button>
        </div>
        <!-- -----------------------------------------------    -->
        <!-- administration -->
        <div>
            <!--Section: Testimonials v.1-->
            <section class="section pb-3 text-center">

                <!--Section heading-->
                <h1 style="color:black;" class="section-heading h1 pt-4">Les Formations</h1>
                <!--Section description-->
                <p style="color:white;" class="section-description">De sage femme à développeur WEB</p>
                <!--Bakground_Image -->

                <p style="color:white;" class="py-3 text-center">Voici les différentes formations qu'Alaji propose...</p>
                <!--/.Bakground_Image -->
    </main>
    <!-- Card group -->
    <div class="card-group">

        <!-- Card -->
        <div class="card mb-4">

            <!-- Card image -->
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">Card title</h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-primary btn-md">Read more</button>

            </div>
            <!-- Card content -->

        </div>
        <!-- Card -->

        <!-- Card -->
        <div class="card mb-4">

            <!-- Card image -->
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!-- Card content -->
            <div class="card-body">
                <!-- Title -->
                <h4 class="card-title">Card title</h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-primary btn-md">Read more</button>

            </div>
            <!-- Card content -->

        </div>
        <!-- Card -->

        <!-- Card -->
        <div class="card mb-4">

            <!-- Card image -->
            <div class="view overlay">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/77.jpg" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">Card title</h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <button type="button" class="btn btn-primary btn-md">Read more</button>

            </div>
            <!-- Card content -->

        </div>
        <!-- Card -->

    </div>
    <!-- Card group -->


    <?php
    foreach ($formations as $key => $value) {
    ?>

        <div class="card">

            <!-- Card image -->
            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a><?php
                                            echo $value['nom_formation'];
                                            ?></a></h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <!-- Button -->
                <a href="#" class="btn btn-primary">Button</a>

            </div>

        </div>

        <!-- <p style="color: white">
                    
                </p> -->
    <?php
    }

    ?>
</body>

</div>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
</body>
<!-- Footer -->
<footer class="page-footer font-small pt-4">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3 pl-5">
                <!-- Content -->
                <h5 class="text-uppercase" style="color:#FDD835;"><i class="fas fa-angle-double-right"></i> ALAJI Formations</h5>
                <p class="text-justify" style="padding-right:40px;">Gros texte d'la mortkitu pour présenter ALAJI eheheh MDR lol j'tombedemachaisedr Ac ne quis a nobis hoc ita dici forte miretur, quod alia quaedam in hoc facultas sit ingeni, neque haec dicendi ratio aut disciplina, ne nos quidem huic uni studio penitus umquam dediti fuimus. Etenim omnes artes, quae ad humanitatem pertinent, habent quoddam commune vinculum, et quasi cognatione quadam inter se continentur.
                </p>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none pb-3">
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase" style="color:#FDD835;"><i class="fas fa-angle-double-right"></i> LIENS UTILES</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase" style="color:#FDD835;"><i class="fas fa-angle-double-right"></i> CONTACT</h5>
                <ul class="list-unstyled">
                    <li>
                        <i class="fas fa-home mr-3"></i> 6 Route de l’Aviation, 54600 Villers-lès-Nancy
                    </li>
                    <li>
                        <i class="fas fa-phone mr-3"></i> 03 83 57 58 32
                    </li>
                    <li>
                        <i class="fas fa-print mr-3"></i> 03 83 57 65 75
                    </li>
                </ul>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color: #FDD835;">© 2020 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

</html>