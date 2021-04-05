<?php

if ($_POST['login'] == 'test' &&
        $_POST['pwd'] == 'admin')
{
    echo($_POST['rep']);
}
else
{
    echo('Erreur de connexion.');
}

?>