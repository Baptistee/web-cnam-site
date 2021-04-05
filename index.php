<?php
if ( !isset($_SESSION['started']) )
{
    session_start();
    $_SESSION['started'] = true;
}
require_once('models/M_Connexion.php');
$pdo = PdoConnexion::getPdoConnexion();
require_once('models/M_Utilisateur.php');
require_once('views/head.php');
require_once("views/header.php");

if ( !isset($_SESSION['id']) ||
        !isset($_POST['page']))
{
    $_POST['page'] = 'connexion';
}

switch($_POST['page'])
{
    case 'API': {
        include('controllers/C_API.php');
        break;
    }
    
    case 'connexion': {
        include('controllers/C_Connexion.php');
        break;
    }

    case 'informations': {
        include('controllers/C_Informations.php');
        break;
    }

    default: {
        var_dump($_SERVER['REQUEST_URI']);
        break;
    }
}

include("views/footer.php");
?>