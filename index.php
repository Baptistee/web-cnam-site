<?php
session_start();
require_once('Models/M_Connexion.php');

$pdo = PdoConnexion::getPdoConnexion();

require_once('Models/M_Utilisateur.php');

require_once('views/head.php');
require_once("views/header.php");

if (!isset($_POST['page'])) {
    $_POST['page'] = 'connexionRequise';
}

switch($_POST['page'])
{
    case 'connexionRequise': {
        include('controllers/C_Informations.php');
        break;
    }
}


include("views/footer.php");
?>