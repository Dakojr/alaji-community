<?php
session_start();



// function ()
// {
//     require_once('../Modele/cgghonnect.php');
//     $stmt = $bdd->prepare('SELECT * FROM ');
//     $stmt->execute();
//     return ($result = $stmt->fetchall());
// }


function all_categorie() //cherche tout les données de la table cétégorie
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT * FROM categorie');
    $stmt->execute();
    return ($result = $stmt->fetchall());
}

function all_users() //cherche tout les données de la table users
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT * FROM users');
    $stmt->execute();
    return ($result = $stmt->fetchall());
}

function all_formation() //cherche tout les données de la table formation
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT * FROM formation ');
    $stmt->execute();
    return ($result = $stmt->fetchall());
}

function all_admin() //cherche les données de tout les administrateur
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT * FROM users WHERE role = "admin"');
    $stmt->execute();
    return ($result = $stmt->fetchall());
}

function all_formateur() //cherche les données de tout les formateurs
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT * FROM users WHERE role = "formateur"');
    $stmt->execute();
    return ($result = $stmt->fetchall());
}

function all_eleves() //
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT * FROM users WHERE role = "eleve"');
    $stmt->execute();
    return ($result = $stmt->fetchall());
}


function ID_and_nom_formateur() //cherche les ID et les nom de tout les formateurs
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT `id_user`, `nom` FROM `users` WHERE role = "formateur"');
    $stmt->execute();
    return ($result = $stmt->fetchall());
}

function IDcategore_and_nomformation() //cherche les ID des catégories de formation et les noms des formation
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT `nom_formation`,`	id_categorie` FROM `formation`');
    $stmt->execute();
    return ($result = $stmt->fetchall());
}

function nomformation_and_IDformation_and_IDcatégorie() //cherche les noms des formations, l'ID des formations et les ID des catégories de formation 
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT `	id_formation`,`nom_formation`,`id_categorie` FROM `formation`');
    $stmt->execute();
    return ($result = $stmt->fetchall());
}

function ID_and_nom_of_formateur() //cherche les ID et les noms de tout les formateurs
{
    require_once('../Modele/connect.php');
    $stmt = $bdd->prepare('SELECT 	"id_user","nom"  FROM users WHERE role = "formateur"');
    $stmt->execute();
    return ($result = $stmt->fetchall());
}