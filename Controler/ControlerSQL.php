<?php
require_once('../Modele/connect.php');
session_start();
// function ()
// {
//     require_once('../Modele/cgghonnect.php');
//     $stmt = $$GLOBALS['$bdd']->prepare('SELECT * FROM ');
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

function all_categorie() //cherche tout les données de la table cétégorie
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT * FROM `categorie`');
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
}

function all_formation() //cherche tout les données de la table formation
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT * FROM formation ');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}
function all_eleve_formation() // cherche tout les données de la table eleve_formation
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT * FROM eleve_formation ');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function users_by_ID() //cherche les données d'un utilisateur par son ID
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT `id_user`, `nom`, `prenom`, `role`, `date_de_naissance`, `pays_de_naissance`, `sexe`, `adresse`, `ville`, `code_postal`, `telephone`, `email`, `img_path` FROM `users` WHERE ID = "1"');
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
    $stmt = $GLOBALS['bdd']->prepare('SELECT `id_user`, `nom` FROM `users` WHERE role = "formateur"');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}
function IDcategorie_and_nomformation() //cherche les ID des catégories de formation et les noms des formations
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT `nom_formation`,`id_categorie` FROM `formation`');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}
function nomformation_and_IDformation_and_IDcatégorie() //cherche les noms des formations, l'ID des formations et les ID des catégories de formation 
{
    $stmt = $GLOBALS['bdd']->prepare('SELECT `id_formation`,`nom_formation`,`id_categorie` FROM `formation`');
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}
function ID_and_nom_of_formateur() //cherche les ID et les noms de tout les formateurs
{
    $stmt = $GLOBALS['bdd']->prepare("SELECT `id_user`, `nom` FROM users WHERE role = 'formateur'");
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}
function users_by_formation() // cherche les informations des eleves et des formateurs d'une formation 
{
    $stmt = $GLOBALS['bdd']->prepare("SELECT u.id_user, u.nom, u.prenom, u.role, u.date_de_naissance, u.pays_de_naissance, u.sexe, u.adresse, u.ville, u.code_postal, u.telephone, u.email, u.img_path, f.id_formation, f.nom_formation, f.lieu, f.nb_eleve_max, f.lien_foarmation_slack, f.date_de_debut, f.date_de_fin, ef.id_formation, ef.id_user FROM users as u, formation as f, eleve_formation as ef  WHERE u.id_user=ef.id_user AND f.id_formation = ef.id_formation and f.id_formation = '1'");
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function formation_by_categorie() // cherche tout les information de tout les formation d'une catégorie de formation
{
    $stmt = $GLOBALS['bdd']->prepare("SELECT f.id_formation, f.nom_formation, f.lieu, f.nb_eleve_max,f.lien_foarmation_slack, f.date_de_debut, f.date_de_fin, f.id_user, c.id_categorie, c.categorie FROM formation as f, categorie as c WHERE f.id_categorie = '1' and f.id_categorie= c.id_categorie");
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function formateur_by_formation() // cherche tout les information des formateur d'une formation 
{
    $stmt = $GLOBALS['bdd']->prepare("SELECT u.id_user, u.nom, u.prenom, u.role, u.date_de_naissance, u.pays_de_naissance, u.sexe, u.adresse, u.ville, u.code_postal, u.telephone, u.email, u.img_path, f.nom_formation,f.nb_eleve_max FROM users as u, formation as f WHERE role = 'formateur' AND u.id_user = f.id_user AND f.id_formation = '2'");
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function eleve_by_formation() // cherche tout les information des eleves d'une formation
{
    $stmt = $GLOBALS['bdd']->prepare("SELECT u.id_user, u.nom, u.prenom, u.role, u.date_de_naissance, u.pays_de_naissance, u.sexe, u.adresse, u.ville, u.code_postal, u.telephone, u.email, u.img_path, f.nom_formation,f.nb_eleve_max FROM users as u, formation as f, eleve_formation as ef WHERE u.role ='eleve' AND u.id_user = ef.id_user AND ef.id_formation = '1'");
    $stmt->execute();
    $result = $stmt->fetchall();
    return $result;
}

function nb_max_of_eleve_by_formation() // nombre maximum eleve d'une formation
{
    $stmt = $GLOBALS['bdd']->prepare("SELECT `nb_eleve_max` FROM formation WHERE id_formation = '2'");
    $stmt->execute();
    $nmoebf = $stmt->fetch();
    $result = 0;
    foreach ($nmoebf as $key => $value) {
        $result=$value;
    }
    return $result;
}
function nb_eleve_by_formation() // nbr eleve inscrit sur une formation
{
    $ebf= eleve_by_formation();
    $result = 0;
    foreach ($ebf as $key => $value) {
        $result++;
    }
    return $result;
}

function nb_place_restent_by_formation() // nombre de place restent dans une formation
{
    $nmoebf = nb_max_of_eleve_by_formation();
    $nebf = nb_eleve_by_formation();
    $result = $nmoebf-$nebf;
    return $result;   

}

function trois_prochaine_formation() // cherche le noms des trois prochaine formation
{
    $stmt = $GLOBALS['bdd']->prepare("SELECT `date_de_debut` FROM formation");
    $stmt->execute();
    $nmoebf = $stmt->fetch();

    $stmt = $GLOBALS['bdd']->prepare("SELECT CURDATE()");
    $stmt->execute();
    $date = $stmt->fetch();
    $s1= 0;
    $s= [];
    foreach ($date as $key => $value) {
        $s1 = $value ;
    }
    foreach ($nmoebf as $key => $value) {
        if ($value > $s1){
            array_push($s,$value);
        }
    }
}

$c = trois_prochaine_formation();
echo $c;
var_dump($c);
