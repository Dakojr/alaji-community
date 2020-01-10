<?php
require_once('../Modele/connect.php');
session_start();

$email = filter_input(INPUT_POST, 'u_email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'u_password', FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,16}$/"))); // regex miniscule et chiffre minimum 6 character max 18 charachter
$password_confirm = filter_input(INPUT_POST, 'u_confirm_password', FILTER_DEFAULT);
$date_de_naissance = filter_input(INPUT_POST, 'u_date_de_naissance', FILTER_DEFAULT);
$prenom = filter_input(INPUT_POST, 'u_prenom', FILTER_DEFAULT);
$nom = filter_input(INPUT_POST, 'u_nom', FILTER_DEFAULT);
$dateTmp = date('Y/m/d');
$role = filter_input(INPUT_POST, 'u_role', FILTER_DEFAULT);
$pays_de_naissance = filter_input(INPUT_POST, 'u_pays_de_naissance', FILTER_DEFAULT);
$sexe = filter_input(INPUT_POST, 'u_sexe', FILTER_DEFAULT);
$adresse = filter_input(INPUT_POST, 'u_adresse', FILTER_DEFAULT);
$ville = filter_input(INPUT_POST, 'u_ville', FILTER_DEFAULT);
$code_postal = filter_input(INPUT_POST, 'u_code_postal', FILTER_DEFAULT);
$telephone = filter_input(INPUT_POST, 'u_telephone', FILTER_DEFAULT);




if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error_msg'] = "Email invalide !";
    header('Location: ../Vue/newFormateur.php');
    die();
}


if (
    !empty($_POST['u_nom']) && !empty($_POST['u_prenom']) && !empty($_POST['u_role']) && !empty($_POST['u_date_de_naissance']) && !empty($_POST['u_pays_de_naissance']) && !empty($_POST['u_sexe']) && !empty($_POST['u_adresse']) && !empty($_POST['u_ville']) && !empty($_POST['u_code_postal']) && !empty($_POST['u_telephone']) && !empty($_POST['u_email']) && !empty($_POST['u_password']) && !empty($_POST['u_img_path'])
) {
    $stmt = $GLOBALS['bdd']->prepare('SELECT * FROM users WHERE email= :mail');
    $stmt->bindParam("mail", $_POST['u_email']);
    $stmt->execute();
    $result = $stmt->fetch();
    if ($result == false) {
        if ($_POST['u_role'] == 'formateur') {
            if (strtotime($dateTmp) > strtotime($_POST['u_date_de_naissance'])) {
                if (filter_var($password, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,16}$/")))) {
                    if ($_POST['u_password'] == $_POST['u_confirm_password']) {
                        $hashage = password_hash($_POST['u_password'], PASSWORD_DEFAULT);
                        $stmt = $GLOBALS['bdd']->prepare("INSERT INTO users (nom, prenom, role, date_de_naissance, pays_de_naissance, sexe, adresse, ville, code_postal, telephone, email, password, img_path) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
                        $stmt->execute(array($_POST['u_nom'], $_POST['u_prenom'], "formateur", $_POST['u_date_de_naissance'], $_POST['u_pays_de_naissance'], $_POST['u_sexe'], $_POST['u_adresse'], $_POST['u_ville'], $_POST['u_code_postal'], $_POST['u_telephone'], $_POST['u_email'], $hashage, $_POST['u_img_path']));
                        $_SESSION['error_msg'] = '';
                        header('Location: ../Vue/adminAccueil.php');
                    } else {
                        $_SESSION['error_msg'] = 'Les mot de passe ne concorde pas';
                        header('Location: ../Vue/newFormateur.php');
                        die();
                    }
                } else {
                    $_SESSION['error_msg'] = 'Le mot de passe doit faire entre 8 et 16 caracteres, avec Majuscule, minuscule, un caractere special et un chiffre';
                    header('Location: ../Vue/newFormateur.php');
                    die();
                }
            } else {
                $_SESSION['error_msg'] = 'Date de naissance invalide';
                header('Location: ../Vue/newFormateur.php');
                die();
            }
        } else {
            $_SESSION['error_msg'] = "Il ne s'agit pas d'un Forateur";
            header('Location: ../Vue/newFormateur.php');
            die();
        }
    } else {
        $_SESSION['error_msg'] = 'Utilsateur ou mail déja existant';
        header('Location: ../Vue/newFormateur.php');
        die();
    }
} else {
    $_SESSION['error_msg'] = 'Veuillez remplir les champs';
    header('Location: ../Vue/newFormateur.php');
    die();
}
