<?php
require_once('../Modele/connect.php');
session_start();


var_dump($_POST);

if (
    empty($_POST['u_nom'])
    && empty($_POST['u_prenom'])
    && empty($_POST['u_role'])
    && empty($_POST['u_date_de_naissance'])
    && empty($_POST['u_pays_de_naissance'])
    && empty($_POST['u_sexe'])
    && empty($_POST['u_adresse'])
    && empty($_POST['u_ville'])
    && empty($_POST['u_code_postal'])
    && empty($_POST['u_telephone'])
    && empty($_POST['u_email'])
    && empty($_POST['u_password'])
    && empty($_POST['u_img_path'])
) {
    $_SESSION['error_msg'] = 'Veuillez remplir un champs à modifier';
    header('Location: ../Vue/UpdateUser.php');
    die();
} else {
    // 'u_checkpassword'
    if (password_verify($_POST['u_checkpassword'], $result['password'])) {
        // 'u_role'
        if (isset($_POST['u_role']) && !empty($_POST['u_role'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET role=:role WHERE id_user=" . $_POST['u_id_user']);
            $stmt->execute(array('role' => $_POST['u_role']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_nom'
        if (!empty($_POST['u_nom'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET nom=:nom WHERE id_user=" . $_POST['u_id_user']);
            $stmt->execute(array('nom' => $_POST['u_nom']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_prenom'
        if (!empty($_POST['u_prenom'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET prenom=:prenom WHERE id_user=" . $_POST['u_id_user']);
            $stmt->execute(array('prenom' => $_POST['u_prenom']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_date_de_naissance'
        if (!empty($_POST['u_date_de_naissance'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET date_de_naissance=:date_de_naissance WHERE id_user=" . $_POST['u_id_user']);
            $stmt->execute(array('date_de_naissance' => $_POST['u_date_de_naissance']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_pays_de_naissance'
        if (!empty($_POST['u_pays_de_naissance'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET pays_de_naissance=:pays_de_naissance WHERE id_user=" . $_POST['u_id_user']);
            $stmt->execute(array('pays_de_naissance' => $_POST['u_pays_de_naissance']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_sexe'
        if (!empty($_POST['u_sexe'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET sexe=:sexe WHERE id_user=" . $_POST['u_id_user']);
            $stmt->execute(array('sexe' => $_POST['u_sexe']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_adresse'
        if (!empty($_POST['u_adresse'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET adresse=:adresse WHERE id=" . $_POST['u_id_user']);
            $stmt->execute(array('adresse' => $_POST['u_adresse']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_ville'
        if (!empty($_POST['u_ville'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET ville=:ville WHERE id_user=" . $_POST['u_id_user']);
            $stmt->execute(array('ville' => $_POST['u_ville']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_code_postal'
        if (!empty($_POST['u_code_postal'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET code_postal=:code_postal WHERE id_user=" . $_POST['u_id_user']);
            $stmt->execute(array('code_postal' => $_POST['u_code_postal']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_telephone'
        if (!empty($_POST['u_telephone'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET telephone=:telephone WHERE id_user=" . $_POST['u_id_user']);
            $stmt->execute(array('telephone' => $_POST['u_telephone']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_email'
        if (!empty($_POST['u_email'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET email=:email WHERE id_user=" . $_POST['u_id_user']);
            $stmt->execute(array('email' => $_POST['u_email']));
            $_SESSION['error_msg'] = '';
        }
        // 'u_password'*
        if (!empty($_POST['u_password'])) {
            if ($_POST['u_password'] == $_POST['u_confirm_password']) {
                $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET password=:password WHERE id_user=" . $_POST['u_id_user']);
                $stmt->execute(array('password' => $_POST['u_password']));
                $_SESSION['error_msg'] = '';
            } else {
                $_SESSION['error_msg'] = 'Les mot de passe ne concorde pas';
                header('Location: ../Vue/UpdateUser.php');
                die();
            }
        }
        // 'u_img_path'
        if (!empty($_POST['u_img_path'])) {
            $stmt = $GLOBALS['bdd']->prepare("UPDATE users SET img_path=:img_path WHERE id_user=" . $_POST['u_id_user']);
            $stmt->execute(array('img_path' => $_POST['u_img_path']));
            $_SESSION['error_msg'] = '';
        }
    } else {
        $_SESSION['error_msg'] = 'mauvais mot de passe de validation';
        header('Location: ../Vue/UpdateUser.php');
        die();
    }
}

header('Location: ../Vue/adminAccueil.php');
die();
