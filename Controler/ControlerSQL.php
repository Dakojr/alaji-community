<?php
session_start();



// function ()
// {
//     require_once('../Modele/cgghonnect.php');
//     $stmt = $bdd->prepare('SELECT * FROM ');
//     $stmt->execute();
//     return ($result = $stmt->fetchall());
// }

function all_users() //cherche tout les données de la table users
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT `id_user`, `nom`, `prenom`, `role`, `date_de_naissance`, `pays_de_naissance`, `sexe`, `adresse`, `ville`, `code_postal`, `telephone`, `email`, `img_path` FROM `users` ');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}
function users_by_ID() //cherche les données d'un utilisateur par son ID
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT `id_user`, `nom`, `prenom`, `role`, `date_de_naissance`, `pays_de_naissance`, `sexe`, `adresse`, `ville`, `code_postal`, `telephone`, `email`, `img_path` FROM `users` WHERE ID_user = "1"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}
function users_by_formation() //cherche les données d'un utilisateur par sa formation
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT `id_user`, `nom`, `prenom`, `role`, `date_de_naissance`, `pays_de_naissance`, `sexe`, `adresse`, `ville`, `code_postal`, `telephone`, `email`, `img_path` FROM `users` WHERE ID = "1"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}
function all_categorie() //cherche tout les données de la table cétégorie
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT * FROM categorie');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}



function all_formation() //cherche tout les données de la table formation
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT * FROM formation ');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function all_admin() //cherche les données de tout les administrateur
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT * FROM users WHERE role = "admin"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function all_formateur() //cherche les données de tout les formateurs
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT * FROM users WHERE role = "formateur"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function all_eleves() //
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT * FROM users WHERE role = "eleve"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}


function ID_and_nom_formateur() //cherche les ID et les nom de tout les formateurs
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT `id_user`, `nom` FROM `users` WHERE role = "formateur"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;}

function IDcategorie_and_nomformation() //cherche les ID des catégories de formation et les noms des formations
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT `nom_formation`,`	id_categorie` FROM `formation`');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function nomformation_and_IDformation_and_IDcatégorie() //cherche les noms des formations, l'ID des formations et les ID des catégories de formation 
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT `	id_formation`,`nom_formation`,`id_categorie` FROM `formation`');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function ID_and_nom_of_formateur() //cherche les ID et les noms de tout les formateurs
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT 	"id_user","nom"  FROM users WHERE role = "formateur"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

