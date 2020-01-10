<?php
// require_once('../Modele/connect.php');

require_once('../Controler/ControlerSQL.php');

$a = all_categorie();

var_dump($a);

// $stmt = $bdd->prepare('SELECT * FROM formation');
// $stmt->execute();
// $result = $stmt->fetchAll();

// $stmtcat = $bdd->prepare('SELECT * FROM categorie');
// $stmtcat->execute();
// $resultcat = $stmtcat->fetchAll();

// $stmtuser = $bdd->prepare('SELECT * FROM users');
// $stmtuser->execute();
// $resultuser = $stmtuser->fetchAll();


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

    <h1>Création de Formation</h1>

    <?php
    echo "Catégorie: " . "<br/>";
    echo "<br>";
    foreach ($resultcat as $key => $value) {
        echo $value["categorie"] . "<br/>";
        foreach ($result as $key => $value1) {
            if ($value["id_categorie"] == $value1["id_categorie"]) {
                echo $value1["nom_formation"] . "<br/>";
            }
        }
        echo "<br>";
    }
    ?>
    <form action="../Controler/ControlerNewFormation.php" method="post">
        <input type="text" name="u_nformation" placeholder="Nom de la Formation" id="">
        <br>
        <br>
        <input type="text" name="u_lieu" placeholder="Adresse de la Formation" id="">
        <br>
        <br>
        <input type="text" name="u_nb_eleve_max" placeholder="Nombre d'eleve" id="">
        <br>
        <br>
        <input type="text" name="u_lien_formation_slack" placeholder="Lien Slack de la Formation" id="">
        <br>
        <br>
        <input type="date" name="u_date_de__debut" placeholder="Date de début de Formation" id="">
        <br>
        <br>
        <input type="date" name="u_date_de_fin" placeholder="Date de fin de Formation" id="">
        <br>
        <br>
        Selectionner un Formateur :
        <br>
        <select name="u_id_user">
        <option disabled selected value> -- selectionner un Formateur -- </option>
            <?php
            foreach ($resultuser as $key => $value2) {
                if ($value2["role"] == "formateur") {

            ?>
                    <option value='<?php echo $value2["id_user"] ?>'><?php echo $value2["nom"] ?></option>
            <?php }
            }
            ?>
        </select>
        <br>
        <br>
        Selectionner une Catégorie :
        <br>
        <select name="u_id_categorie">
        <option disabled selected value> -- Selectionner une Catégorie -- </option>
            <?php
            foreach ($a as $key => $value3) {
            ?>
                <option value='<?php echo $value3["id_categorie"] ?>'><?php echo $value3["categorie"] ?></option>
            <?php }
            ?>
        </select>
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