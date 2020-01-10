<?php

session_start();

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
</head>

<body>



    <h1>Bonjour à tous les Alajiens !</h1>
    <p>inscription</p>
    <p>Rejoins nous !!!!</p>
    <p>ait confiance !!!</p>

    <form method="post" action="../Controler/ControlerAuth.php?nom=register">
        Email : <input type="mail" name="u_email" size="12"><br>
        Nom : <input type="text" name="u_nom" size="12"><br>
        Prénom : <input type="text" name="u_prenom" size="12">
        date de naissance : <input type="date" name="u_daten" size="12">
        pays de naissance : <input type="text" name="u_pays_de_naissance" size="12"><br>
        sexe : <input type="text" name="u_sexe" size="12"><br>
        adresse : <input type="text" name="u_adresse" size="12"><br>
        ville : <input type="text" name="u_ville" size="12">
        code postal : <input type="text" name="u_code_postal" size="12">
        telephone : <input type="text" name="u_telephone" size="12"><br>
        password : <input type="text" name="u_password" size="12">
        confirmer password : <input type="text" name="u_confirmer_password" size="12">
        image de profil : <input type="text" name="u_img_path" size="12"><br>
        <input type="submit" value="OK">
    </form>


    <?php

    if (isset($_SESSION['error_msg'])) {
        echo $_SESSION['error_msg'];
    }
    ?>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!- - Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
</body>

</html>