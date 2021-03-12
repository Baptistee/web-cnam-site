<?php

if ( !isset($_POST['action']) )
{
    $_POST['action'] = 'identification';
}

switch ($_POST['action'])
{
    case 'identification':
    {
        include('views/V_Connexion.php');
        break;
    }

    case 'valideConnexion':
    {
        $login = $_REQUEST['login'];
        $pwd = $_REQUEST['pwd'];
        if ($login === "test")
        {
            $_SESSION['id'] = 1;
            // TODO: RECUP LE ID DU USER CONNECTE.
            $_POST['page'] = 'informations';
            $_POST['action'] = 'afficherEtudiant';
            include('index.php');
        }
        else
        {
            include("views/V_Connexion.php");
        }
        break;
    }
}

?>