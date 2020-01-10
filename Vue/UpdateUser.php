<?php
require_once('../Controler/ControlerSQL.php');
$c = all_users();

$stmtuser = $bdd->prepare('SELECT * FROM users');
$stmtuser->execute();
$resultuser = $stmtuser->fetchAll();

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


    <h1>Modification d'utilisateur</h1>
<?php
foreach ($c as $key => $value2) {
    if ($value2["id_user"] == $_SESSION['user']){
$resultrole = $value2["role"];}}
?>


    <form action="../Controler/ControlerUpdateUser.php" method="post">

        <?php
        if (isset($resultrole) && $resultrole == "admin") {

            echo "<select name='u_id_user'>";
           echo  "<option disabled selected value> -- selectionner un Utilisateur -- </option>";
            foreach ($c as $key => $value2) {
        ?>
                <option value='<?php echo $value2["id_user"] ?>'><?php echo $value2["nom"] ?></option>
        <?php
            }


            echo "</select>";

            echo "
            <br>
            <br>
                 <select name='u_role'>
                 <option value=''>Statut</option>
                 <option disabled selected value> -- Selectionner un role -- </option>
                        <option value='admin'>Admin</option>
                        <option value='formateur'>Formateur</option>
                        <option value='eleve'>Eleve</option>
                 </select>
            <br>
            <br>";
        }
        ?>

        <input type="text" name="u_nom" placeholder="nom" id="nom">
        <br>
        <br>
        <input type="text" name="u_prenom" id="" placeholder="prénom">
        <br>
        <br>

        <input type="date" name="u_date_de_naissance" id="" placeholder="Date de naisance">
        <br>
        <br>
        <input type="text" name="u_pays_de_naissance" id="" placeholder="Pays de naissance">
        <br>
        <br>
        <select name="u_sexe">
        <option disabled selected value> -- Changer le sexe -- </option>
            <option value="Femme">Femme</option>
            <option value="Homme">Homme</option>
            <option value="Autre">Autre</option>
        </select>
        <br>
        <br>
        <input type="text" name="u_adresse" id="" placeholder="Adresse">
        <br>
        <br>
        <input type="text" name="u_ville" id="" placeholder="Ville">
        <br>
        <br>
        <input type="number" name="u_code_postal" id="" placeholder="Code postal">
        <br>
        <br>
        <input type="number" name="u_telephone" id="" placeholder="Télèphone">
        <br>
        <br>
        <input type="text" name="u_email" id="" placeholder="Email">
        <br>
        <br>
        <input type="password" name="u_password" id="" placeholder="Nouveau Mot de Passe">
        <br>
        <br>
        <input type="password" name="u_confirm_password" id="" placeholder="Confirmer nouveau MDP">
        <br>
        <br>
        <input type="file" name="u_img_path" id="Photo de profil">
        <br>
        <br>
        <br>
        <input type="password" name="u_checkpassword" id="" placeholder="MDP pour validation">
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