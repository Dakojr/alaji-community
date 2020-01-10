<?php
require_once('../Controler/ControlerSQL.php');
$c = all_admin();
session_start();
foreach ($c as $key => $value3) {
    if ($value3["id_user"] != $_SESSION['user']['id_user']){
        $_SESSION['error_msg'] = "t'es pas admin";
        header('Location: ../Vue/index.php');
        die();}}

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



    <h1>Hello Home !</h1>

    <a href="newAdmin.php">newAdmin</a>
    <br><br>
    <a href="newFormateur.php">newFormateur</a>
    <br><br>
    <a href="newCategorie.php">newCategorie</a>
    <br><br>
    <a href="newFormation.php">newFormation</a>
    <br><br>
    <a href="UpdateUser.php">UpdateUser</a>
    <br><br>
    <a href="UpdateFormation.php">UpdateFormation</a>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
</body>

</html>