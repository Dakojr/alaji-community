<?php
session_start();
require_once('../Modele/connect.php');



// function ()
// {
//     require_once('../Modele/cgghonnect.php');
//     $stmt = $bdd->prepare('SELECT * FROM ');
//     $stmt->execute();
//     return ($result = $stmt->fetchall());
// }

function all_users() //cherche tout les données de la table users
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT `id_user`, `nom`, `prenom`, `role`, `date_de_naissance`, `pays_de_naissance`, `sexe`, `adresse`, `ville`, `code_postal`, `telephone`, `email`, `img_path` FROM `users` ');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}
function user_by_ID() //cherche les données d'un utilisateur par son ID
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT `id_user`, `nom`, `prenom`, `role`, `date_de_naissance`, `pays_de_naissance`, `sexe`, `adresse`, `ville`, `code_postal`, `telephone`, `email`, `img_path` FROM `users` WHERE ID_user = "1"');
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}
function users_by_formation() //cherche les données d'un utilisateur par sa formation
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT `id_user`, `nom`, `prenom`, `role`, `date_de_naissance`, `pays_de_naissance`, `sexe`, `adresse`, `ville`, `code_postal`, `telephone`, `email`, `img_path` FROM `users` WHERE ID = "1"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}
function all_categorie() //cherche tout les données de la table cétégorie
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT * FROM categorie');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}



function all_formation() //cherche tout les données de la table formation
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT * FROM formation ');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function all_admin() //cherche les données de tout les administrateur
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT * FROM users WHERE role = "admin"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function all_formateur() //cherche les données de tout les formateurs
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT * FROM users WHERE role = "formateur"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function all_eleves() //
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT * FROM users WHERE role = "eleve"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}


function ID_and_nom_formateur() //cherche les ID et les nom de tout les formateurs
{
    require_once('../Modele/connect.php');
    $stmt = $GLOBALS['bdd']->prepare('SELECT `id_user`, `nom` FROM "users" WHERE role = "formateur"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;}

function IDcategorie_and_nomformation() //cherche les ID des catégories de formation et les noms des formations
{
    require_once('../Modele/connect.php');
    $stmt = $GLOBALS['bdd']->prepare('SELECT `nom_formation`,`id_categorie` FROM "formation"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function nomformation_and_IDformation_and_IDcatégorie() //cherche les noms des formations, l'ID des formations et les ID des catégories de formation 
{
    require_once('../Modele/connect.php');
    $stmt = $GLOBALS['bdd']->prepare('SELECT `id_formation`,`nom_formation`,`id_categorie` FROM "formation"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function ID_and_nom_of_formateur() //cherche les ID et les noms de tout les formateurs
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT `id_user`, `nom`  FROM users WHERE role = "formateur"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}
// function formation_by_categorie()
// {
//     $stmt = $GLOBALS['bdd']->prepare('SELECT "id_user","nom"  FROM users WHERE categorie = "1"');
//     $stmt->execute();
//     $result = $stmt->fetch();
//     return $result;
// }

$a = all_categorie();
var_dump($a);

$b = all_admin();
var_dump($b);