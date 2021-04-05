<?php

$id = 1;
$nom = "Bonjour";
$prenom = "Baptiste";
$identifiant = "baptiste.blanchet";
$email = "baptiste.blanchet";
$mdp = "QuatreFois0";
$role = "etudiant";
$promo = "2019-2022";

switch($_POST['action'])
{
    case 'gestion':
    {
        include('views/V_Gestion.php');
        break;
    }

    case 'ajouter':
    {
        include('views/V_Utilisateur_Ajouter.php');
        break;
    }

    case 'modifier':
    {
        $res = Utilisateur::retournerTousUtilisateurs($pdo);
        include('views/V_Utilisateur_Modifier.php');
        break;
    }

    case 'supprimer':
    {
        include('views/V_Utilisateur_Supprimer.php');
        break;
    }

    case 'afficherUtilisateur':
    {
        $res = Utilisateur::retournerTousUtilisateurs($pdo);
        include('views/V_Utilisateurs_Afficher.php');
        break;
    }

    case 'ajouterUtilisateur':
    {
        Utilisateur::addUtilisateur($pdo,
            $_REQUEST['nom'],
            $_REQUEST['prenom'],
            $_REQUEST['identifiant'],
            $_REQUEST['email'],
            $_REQUEST['mdp'],
            $_REQUEST['role'],
            $_REQUEST['promo']);
        break;
    }

    case 'modifierUtilisateur':
    {
        Utilisateur::updateUtilisateur($pdo,
            $_REQUEST['id'],
            $_REQUEST['nom'],
            $_REQUEST['prenom'],
            $_REQUEST['identifiant'],
            $_REQUEST['email'],
            $_REQUEST['mdp'],
            $_REQUEST['role'],
            $_REQUEST['promo']);
        break;
    }

    case 'supprimerUtilisateur':
    {
        Utilisateur::deleteUtilisateur($pdo,
            $_REQUEST['id']);
        break;
    }
}
?>