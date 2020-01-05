<?php
require_once('../Modele/connect.php');
session_start();
$stmt = $bdd->prepare('SELECT * FROM categorie');
$stmt->execute();
$result = $stmt->fetchAll();

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



    <h1>Création de Catégorie</h1>

    <?php
    echo "Catégorie déja existante : " . "<br/>";
    foreach ($result as $key => $value) {
        echo $value["categorie"] . "<br/>";
    }
    ?>
    <br>
    <br>
    <form action="../Controler/ControlerNewCategorie.php" method="post">
        <input type="text" name="u_ncategorie" placeholder="Nom de la Catégorie" id="">
        <br>
        <br>
        <button type="submit">Enregistrer!</button>
    </form>
    <?php
    if (isset($_SESSION['error_msg']) && $_SESSION['error_msg'] != '') {
        echo '<p>' . $_SESSION['error_msg'] . '</p>';
    }
    ?>

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