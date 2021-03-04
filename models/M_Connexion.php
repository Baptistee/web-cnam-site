<?php
class PdoConnexion
{
    private static $serveur='mysql:host=localhost';
    private static $bdd='dbname=mini_site';
    private static $user='root';
    private static $mdp='';
    private static $pdo;
    private static $pdoSite = null;

    private function __construct()
    {
        try {
            PdoConnexion::$pdo = new PDO(PdoConnexion::$serveur . ';' . PdoConnexion::$bdd,
                PdoConnexion::$user,
                PdoConnexion::$mdp);
            PdoConnexion::$pdo->query("SET CHARACTER SET utf8");
            PdoConnexion::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            throw new Exception("Erreur ? la connexion \n" . $e->getMessage());
        }
    }

    public static function getPdoConnexion()
    {
        if ( PdoConnexion::$pdo==null )
        {
            PdoConnexion::$pdoSite = new PdoConnexion();
        }
        return PdoConnexion::$pdoSite;
    }

    public static function getPdo()
    {
        if ( PdoConnexion::$pdo==null )
        {
            PdoConnexion::$pdoSite = new PdoConnexion();
        }
        return PdoConnexion::$pdo;
    }
}
?>