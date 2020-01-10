<?php
require_once('../Modele/connect.php');
session_start();


var_dump($_POST);

if (
    empty($_POST['u_id_formation'])
    && empty($_POST['u_nformation'])
    && empty($_POST['u_lieu'])
    && empty($_POST['u_nb_eleve_max'])
    && empty($_POST['u_lien_formation_slack'])
    && empty($_POST['u_date_de__debut'])
    && empty($_POST['u_date_de_fin'])
    && empty($_POST['u_id_formation'])
    && empty($_POST['u_id_categorie'])
) {
    $_SESSION['error_msg'] = 'Veuillez remplir un champs à modifier';
    header('Location: ../Vue/UpdateFormation.php');
    die();
} else {
            // 'u_id_formation'
    if (isset($_POST['u_id_formation'])){
        $_SESSION['error_msg'] = '';
        // 'u_nformation'
        if (!empty($_POST['u_nformation'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE formation SET nom_formation=:nom_formation WHERE id_formation=" . $_POST['u_id_formation']);
            $stmt->execute(array('nom_formation' => $_POST['u_nformation']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_lieu'
        if (!empty($_POST['u_lieu'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE formation SET lieu=:lieu WHERE id_formation=" . $_POST['u_id_formation']);
            $stmt->execute(array('lieu' => $_POST['u_lieu']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_nb_eleve_max'
        if (!empty($_POST['u_nb_eleve_max'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE formation SET nb_eleve_max=:nb_eleve_max WHERE id_formation=" . $_POST['u_id_formation']);
            $stmt->execute(array('nb_eleve_max' => $_POST['u_nb_eleve_max']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_lien_formation_slack'
        if (!empty($_POST['u_lien_formation_slack'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE formation SET lien_formation_slack=:lien_formation_slack WHERE id_formation=" . $_POST['u_id_formation']);
            $stmt->execute(array('lien_formation_slack' => $_POST['u_lien_formation_slack']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_date_de__debut'
        if (!empty($_POST['u_date_de__debut'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE formation SET date_de__debut=:date_de__debut WHERE id_formation=" . $_POST['u_id_formation']);
            $stmt->execute(array('date_de__debut' => $_POST['u_date_de__debut']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_date_de_fin'
        if (!empty($_POST['u_date_de_fin'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE formation SET date_de_fin=:date_de_fin WHERE id_formation=" . $_POST['u_id_formation']);
            $stmt->execute(array('date_de_fin' => $_POST['u_date_de_fin']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_id_user'
        if (!empty($_POST['u_id_user'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE formation SET id_user=:id_user WHERE id_formation=" . $_POST['u_id_formation']);
            $stmt->execute(array('id_user' => $_POST['u_id_user']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_id_categorie'
        if (!empty($_POST['u_id_categorie'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE formation SET id_categorie=:id_categorie WHERE id_formation=" . $_POST['u_id_formation']);
            $stmt->execute(array('id_categorie' => $_POST['u_id_categorie']));
            $_SESSION['error_msg'] = '';
        }
    }
     else {
            $_SESSION['error_msg'] = 'Veuillez selectionner une formation';
            header('Location: ../Vue/UpdateFormation.php');
            die();
}}