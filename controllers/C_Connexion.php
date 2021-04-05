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

        if ($login === "admin" && $pwd === "QuatreFois0")
        {
            $_SESSION['id'] = 1;
            $_POST['page'] = 'informations';
            $_POST['action'] = 'gestion';
            include('views/V_Gestion.php');
        }
        else
        {
            include("views/V_Connexion.php");
        }
        break;
    }
}

?>