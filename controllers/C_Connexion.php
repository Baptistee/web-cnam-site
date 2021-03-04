<?php

if (!isset($_GET['action'])) {
    $_GET['action'] = 'demandeConnexion';
}

switch ($_GET['action']) {

    case 'demandeConnexion': {
        include("views/connexion.php");
        break;
    }

    case 'valideConnexion': {
        $login = $_REQUEST['login'];
        $pwd = $_REQUEST['pwd'];
        if ($login === "test") {
            echo("bonjour");
        } else {
            echo("non connexté");
        }
        break;
    }

    default : {
		include("views/connexion.php");
		break;
	}
}

?>