<?php

$Id = 1;
$tNom = 'Bibop';
$tPrenom = 'Rachmaninov';
$tIdentifiant = 'bibop.rakrak';
$tEmail = 'bibop@raktaktak.ru';
$tMdp = 'QuatreFoisLe0';
$tRole = 'etudiant';
$tPromo = '2019-2050';

switch($_POST['action'])
{
    case 'afficherEtudiant':
    {
        $Nom = Utilisateur::getNom($pdo, $Id);
        $Prenom = Utilisateur::getPrenom($pdo, $Id);
        $Identifiant = Utilisateur::getIdentifiant($pdo, $Id);
        $Email = Utilisateur::getEmail($pdo, $Id);
        $Promo = Utilisateur::getPromo($pdo, $Id);
        $Date_Creation = Utilisateur::getDateCreation($pdo, $Id);
        $Date_Connexion = Utilisateur::getDateConnexion($pdo, $Id);

        include('views/V_Etudiant.php');
        break;
    }

    case 'valideConnexion':
    {
        $Nom = Utilisateur::getNom($pdo, $Id);
        $Prenom = Utilisateur::getPrenom($pdo, $Id);
        $Identifiant = Utilisateur::getIdentifiant($pdo, $Id);
        $Email = Utilisateur::getEmail($pdo, $Id);
        $Promo = Utilisateur::getPromo($pdo, $Id);
        $Date_Creation = Utilisateur::getDateCreation($pdo, $Id);
        $Date_Connexion = Utilisateur::getDateConnexion($pdo, $Id);

        include('views/V_Etudiant.php');
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

    case 'supprimerUtilisateur':
    {
        Utilisateur::deleteUtilisateur($pdo,
            $_REQUEST['id']);
    }
}
?>