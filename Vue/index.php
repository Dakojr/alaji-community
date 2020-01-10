<?php //require_once('../Modele/connect.php'); session_start();// 
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
    <title>Community Alaji</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }



        body,
        html {
            height: 100%;
        }

        body {
            text-align: center;
            background-color: #FEFEFE;
        }



        #main {
            max-width: 1280px;
            min-height: 100%;
            max-height: 600px;
            margin: 0 auto;
            position: absolute;
            overflow: auto;
        }

        .nav-item a {
            font-variant: small-caps;
            font-size: 20px;
        }

        .formations {
            justify-content: center;
            width: 75%;
            margin: 0 auto;
            box-shadow: 0px 0px 5px grey;
        }

        .formations_content {
            display: flex;
            position: relative;
            justify-content: center;
            margin: 0 auto;
        }

        .intro {
            margin:0 auto;
        }

        footer {
            border-top: 2px solid #FDD835;
            background-color: black;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark border-bottom" style="background-color: #FDD835">
        <a class="navbar-brand" href="index.php"><img style="background-color: white; border-radius:200px;padding:5px;width:70px;" src="https://nsa40.casimages.com/img/2020/01/10/200110014602150184.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <span class="sr-only">(current)</span>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn-link rounded-lg ml-3 p-4 text-dark" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Formations</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item waves-light" href="#">Toutes les formations</a>
                        <a class="dropdown-item waves-light" href="#">Formations par catégories</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn-link rounded-lg ml-3 p-4 text-dark" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item waves-light" href="#">Link1</a>
                        <a class="dropdown-item waves-light" href="#">Link2</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-light btn-link rounded-lg mr-3 p-4 text-dark" href="inscription.php">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-light btn-link rounded-lg mr-3 p-4 text-dark" href="connexion.php">Connexion</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
    <main>

        <h1 class="font-weight-bold" style="font-variant:small-caps;padding-top:5px;">Bienvenue sur ALAJI Community !</h1>
        <p class="intro" style="width:75%;text-align:justify;">ALAJI Community, c'est Fieri, inquam, Triari, nullo pacto potest, ut non dicas, quid non probes eius, a quo dissentias. quid enim me prohiberet Epicureum esse, si probarem, quae ille diceret? cum praesertim illa perdiscere ludus esset. Quam ob rem dissentientium inter se reprehensiones non sunt vituperandae, maledicta, contumeliae, tum iracundiae, contentiones concertationesque in disputando pertinaces indignae philosophia mihi videri solent.

            Itaque verae amicitiae difficillime reperiuntur in iis qui in honoribus reque publica versantur; ubi enim istum invenias qui honorem amici anteponat suo? Quid? Haec ut omittam, quam graves, quam difficiles plerisque videntur calamitatum societates! Ad quas non est facile inventu qui descendant. Quamquam Ennius recte.

            Ac ne quis a nobis hoc ita dici forte miretur, quod alia quaedam in hoc facultas sit ingeni, neque haec dicendi ratio aut disciplina, ne nos quidem huic uni studio penitus umquam dediti fuimus. Etenim omnes artes, quae ad humanitatem pertinent, habent quoddam commune vinculum, et quasi cognatione quadam inter se continentur.</p>

        <a href="adminAccueil.php">Admin</a>



        <!-- FORMATIONS A PARTIR D'ICI -->
        <div class="formations">
            <h3 class="font-weight-bold pt-3" style="font-variant:small-caps;">Nos Prochaines Formations;</h3>
            <hr>
            <div class="formations_content" style="padding-bottom:5px;">
                <div class="card w-25 p-3 m-3">
                    <div class="card-body">
                        <h5 class="card-title">Panel title</h5>
                        <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                        <a class="card-link">Card link</a>
                        <a class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card w-25 p-3 m-3">
                    <div class="card-body">
                        <h5 class="card-title">Panel title</h5>
                        <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                        <a class="card-link">Card link</a>
                        <a class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card w-25 p-3 m-3">
                    <div class="card-body">
                        <h5 class="card-title">Panel title</h5>
                        <p class="card-text">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
                        <a class="card-link">Card link</a>
                        <a class="card-link">Another link</a>
                    </div>
                </div>
            </div>

    </main>
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