<?php

$Id = 1;
$tNom = 'Bibop';
$tPrenom = 'Rachmaninov';
$tIdentifiant = 'bibop.rakrak';
$tEmail = 'bibop@raktaktak.ru';
$tMdp = 'QuatreFoisLe0';
$tRole = 'etudiant';
$tPromo = '2019-2050';

$Nom = Utilisateur::getNom($pdo, $Id);
$Prenom = Utilisateur::getPrenom($pdo, $Id);
$Identifiant = Utilisateur::getIdentifiant($pdo, $Id);
$Email = Utilisateur::getEmail($pdo, $Id);
$Promo = Utilisateur::getPromo($pdo, $Id);
$Date_Creation = Utilisateur::getDateCreation($pdo, $Id);
$Date_Connexion = Utilisateur::getDateConnexion($pdo, $Id);

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