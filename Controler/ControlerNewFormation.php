<?php
require_once('../Modele/connect.php');
session_start();

if (
    !empty($_POST['u_nformation']) && !empty($_POST['u_lieu']) && !empty($_POST['u_nb_eleve_max']) && !empty($_POST['u_lien_formation_slack']) && !empty($_POST['u_date_de__debut']) && !empty($_POST['u_date_de_fin']) && !empty($_POST['u_id_user']) && !empty($_POST['u_id_categorie'])
) {
    $stmt = $GLOBALS['bdd']->prepare('SELECT * FROM formation');
    $stmt->execute();
    $result = $stmt->fetchall();

    $controle = 0;
    foreach ($result as $key => $value) {
        if ($value["nom_formation"] == $_POST['u_nformation']) {
            $controle++;
        }
    }
    if ($controle == 0) {
        $stmt = $GLOBALS['bdd']->prepare("INSERT INTO formation (nom_formation, lieu, nb_eleve_max, lien_formation_slack, date_de__debut, date_de_fin, id_user, id_categorie) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->execute(array($_POST['u_nformation'], $_POST['u_lieu'], $_POST['u_nb_eleve_max'], $_POST['u_lien_formation_slack'], $_POST['u_date_de__debut'], $_POST['u_date_de_fin'], $_POST['u_id_user'], $_POST['u_id_categorie']));
        $_SESSION['error_msg'] = '';
        header('Location: ../Vue/newFormation.php');
    } else {
        $_SESSION['error_msg'] = 'Formation déja existante';
        header('Location: ../Vue/newFormation.php');
        die();
    }
} else {
    $_SESSION['error_msg'] = 'Veuillez remplir les champs';
    header('Location: ../Vue/newFormation.php');
    die();
}
