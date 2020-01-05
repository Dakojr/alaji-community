<?php
require_once('../Modele/connect.php');
session_start();



var_dump($_POST);

if (
    !empty($_POST['u_ncategorie'])
) {
    $stmt = $bdd->prepare('SELECT * FROM categorie');
    $stmt->execute();
    $result = $stmt->fetchall();

    $controle = 0;
    foreach ($result as $key => $value) {
        if ($value["categorie"] == $_POST['u_ncategorie']) {
            $controle++;
        }
    }
    if ($controle == 0) {
        $stmt = $bdd->prepare("INSERT INTO categorie (categorie) VALUES (?)");
        $stmt->execute(array($_POST['u_ncategorie']));
        $_SESSION['error_msg'] = '';
        header('Location: ../Vue/newCategorie.php');
    } else {
        $_SESSION['error_msg'] = 'Catégorie déja existant';
        header('Location: ../Vue/newCategorie.php');
        die();
    }
} else {
    $_SESSION['error_msg'] = 'Veuillez remplir les champs';
    header('Location: ../Vue/newCategorie.php');
    die();
}
