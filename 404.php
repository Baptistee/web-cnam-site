<?php

// TODO :   définir un array de chemin accepté pour rediger vers l'index
//          sinon condition pour la 404.

$url = explode('/', $_SERVER['REQUEST_URI']);

$test = 0;

switch($url[1])
{
    case 'api':
    {
        $_POST['page'] = 'API';
        $test = 1;
        include('index.php');
        break;
    }
        
    default :
    {
        print("La fameuse erreur 404 pas de chance ...");
        break;
    }
}
 
/*

elseif(preg_match('#article-([0-9]+)#', $url, $params))
{
    $idArticle = $params[1];
    print("ciao");
}

*/

?>