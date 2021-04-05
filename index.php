<?php
if ( !isset($_SESSION['started']) )
{
    session_start();
    $_SESSION['started'] = true;
}
require_once('models/M_Connexion.php');
$pdo = PdoConnexion::getPdoConnexion();
require_once('models/M_Utilisateur.php');

include('views/head.php');
include("views/header.php");

if ( !isset($_SESSION['id']) ||
        !isset($_POST['page']))
{
    $_POST['page'] = 'connexion';
}

switch($_POST['page'])
{
    case 'connexion': {
        include('controllers/C_Connexion.php');
        break;
    }

    case 'informations': {
        include('controllers/C_Informations.php');
        break;
    }

    default: {
        break;
    }
}

include("views/footer.php");
?>