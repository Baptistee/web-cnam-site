<?php
class Utilisateur
{
    /*  Modele Utilisateur

        Attributs
        ---------
            - Id
            - Nom
            - Prenom
            - Identifiant
            - Email
            - Mdp
            - Role
            - Promo
            - Date_Connexion
            - Date_Creation
    */
    public static function getId($pPdo, &$pId)
    {
        try {
            $req = 'SELECT Id FROM utilisateur WHERE Id = :Id';
            $pdo = $pPdo->getPdo();
            $res = $pdo->prepare($req);
            $res->bindValue(':Id', $pId, PDO::PARAM_INT);
            $res->execute();
            $data = $res->fetch(PDO::FETCH_ASSOC);
            $data = $data['Id'];
            return $data;
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function getNom($pPdo, &$pId)
    {
        try {
            $req = 'SELECT Nom FROM utilisateur WHERE Id = :Id';
            $pdo = $pPdo->getPdo();
            $res = $pdo->prepare($req);
            $res->bindValue(':Id', $pId, PDO::PARAM_INT);
            $res->execute();
            $data = $res->fetch(PDO::FETCH_ASSOC);
            $data = $data['Nom'];
            return $data;
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function setNom($pPdo, &$pId, &$pNom)
    {
        try {
            $req = "UPDATE utilisateur SET Nom = :Nom WHERE Id = :Id";
            $pdo = $pPdo->getPdo();
            $res = $pdo->prepare($req);
            $res->bindValue(':Id', $pId, PDO::PARAM_INT);
            $res->bindValue(':Nom', $pNom, PDO::PARAM_STR);
            $res->execute();
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function getPrenom($pPdo, &$pId)
    {
        try {
            $req = 'SELECT Prenom FROM utilisateur WHERE Id = :Id';
            $pdo = $pPdo->getPdo();
            $rs = $pdo->prepare($req);
            $rs->bindValue(':Id', $pId, PDO::PARAM_INT);
            $rs->execute();
            $data = $rs->fetch(PDO::FETCH_ASSOC);
            $data = $data['Prenom'];
            return $data;
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function setPrenom($pPdo, &$pId, &$pPrenom)
    {
        try {
            $req = "UPDATE utilisateur SET Prenom = :Prenom WHERE Id = :Id";
            $pdo = $pPdo->getPdo();
            $res = $pdo->prepare($req);
            $res->bindValue(':Id', $pId, PDO::PARAM_INT);
            $res->bindValue(':Prenom', $pPrenom, PDO::PARAM_STR);
            $res->execute();
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function getIdentifiant($pPdo, &$pId)
    {
        try {
            $req = 'SELECT Identifiant FROM utilisateur WHERE Id = :Id';
            $pdo = $pPdo->getPdo();
            $rs = $pdo->prepare($req);
            $rs->bindValue(':Id', $pId, PDO::PARAM_INT);
            $rs->execute();
            $data = $rs->fetch(PDO::FETCH_ASSOC);
            $data = $data['Identifiant'];
            return $data;
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function setIdentifiant($pPdo, &$pId, &$pIdentifiant)
    {
        try {
            $req = "UPDATE utilisateur SET Identifiant = :Identifiant WHERE Id = :Id";
            $pdo = $pPdo->getPdo();
            $res = $pdo->prepare($req);
            $res->bindValue(':Id', $pId, PDO::PARAM_INT);
            $res->bindValue(':Identifiant', $pIdentifiant, PDO::PARAM_STR);
            $res->execute();
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function getEmail($pPdo, &$pId)
    {
        try {
            $req = 'SELECT Email FROM utilisateur WHERE Id = :Id';
            $pdo = $pPdo->getPdo();
            $rs = $pdo->prepare($req);
            $rs->bindValue(':Id', $pId, PDO::PARAM_INT);
            $rs->execute();
            $data = $rs->fetch(PDO::FETCH_ASSOC);
            $data = $data['Email'];
            return $data;
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function setEmail($pPdo, &$pId, &$pEmail)
    {
        try {
            $req = "UPDATE utilisateur SET Email = :Email WHERE Id = :Id";
            $pdo = $pPdo->getPdo();
            $res = $pdo->prepare($req);
            $res->bindValue(':Id', $pId, PDO::PARAM_INT);
            $res->bindValue(':Email', $pEmail, PDO::PARAM_STR);
            $res->execute();
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function setMdp($pPdo, &$pId, &$pMdp)
    {
        if ( strlen($pMdp) > 5 )
        {
            $mdpTest = false;
            $mdpBuffer_lower = false;
            $mdpBuffer_upper = false;
            $mdpBuffer_digit = false;

            $chars = str_split($pMdp);

            foreach ($chars as &$char) {
                if ( ctype_lower($char) )
                {
                    $mdpBuffer_lower = true;
                }
                if ( ctype_upper($char) )
                {
                    $mdpBuffer_upper = true;
                }
                if ( ctype_digit($char) )
                {
                    $mdpBuffer_digit = true;
                }
            }

            $mdpTest = ($mdpBuffer_lower and $mdpBuffer_upper and $mdpBuffer_digit);

            if ( !$mdpTest )
            {
                return false;
            }

        }
        else
        {
            return false;
        }

        try {
            $req = "UPDATE Mdp SET Mdp = :Mdp WHERE Id = :Id";
            $pdo = $pPdo->getPdo();
            $res = $pdo->prepare($req);
            $res->bindValue(':Id', $pId, PDO::PARAM_INT);
            $res->bindValue(':Mdp', $pMdp, PDO::PARAM_STR);
            $res->execute();
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php

            return false;
        }

        return true;
    }

    public static function getRole($pPdo, &$pId)
    {
        // TODO : Role est un mot de MySQL.
    }

    public static function setRole($pRole)
    {
        // TODO : Role est un mot de MySQL.
    }

    public static function getPromo($pPdo, &$pId)
    {
        try {
            $req = 'SELECT Promo FROM utilisateur WHERE Id = :Id';
            $pdo = $pPdo->getPdo();
            $rs = $pdo->prepare($req);
            $rs->bindValue(':Id', $pId, PDO::PARAM_INT);
            $rs->execute();
            $data = $rs->fetch(PDO::FETCH_ASSOC);
            $data = $data['Promo'];
            return $data;
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function setPromo($pPdo, &$pId, &$pPromo)
    {
        try {
            $req = "UPDATE utilisateur SET Promo = :Promo WHERE Id = :Id";
            $pdo = $pPdo->getPdo();
            $res = $pdo->prepare($req);
            $res->bindValue(':Id', $pId, PDO::PARAM_INT);
            $res->bindValue(':Promo', $pPromo, PDO::PARAM_STR);
            $res->execute();
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function getDateCreation($pPdo, &$pId)
    {
        try {
            $req = 'SELECT Date_Creation FROM utilisateur WHERE Id = :Id';
            $pdo = $pPdo->getPdo();
            $rs = $pdo->prepare($req);
            $rs->bindValue(':Id', $pId, PDO::PARAM_INT);
            $rs->execute();
            $data = $rs->fetch(PDO::FETCH_ASSOC);
            $data = $data['Date_Creation'];
            return $data;
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function setDateCreation($pPdo, &$pId)
    {
        // TODO : Plus besoin ?
    }

    public static function getDateConnexion($pPdo, &$pId)
    {
        try {
            $req = 'SELECT Date_Connexion FROM utilisateur WHERE Id = :Id';
            $pdo = $pPdo->getPdo();
            $rs = $pdo->prepare($req);
            $rs->bindValue(':Id', $pId, PDO::PARAM_INT);
            $rs->execute();
            $data = $rs->fetch(PDO::FETCH_ASSOC);
            $data = $data['Date_Connexion'];
            return $data;
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }

    public static function setDateConnexion($pPdo, &$pId)
    {
        // TODO : Plus besoin ?
    }

    public static function addUtilisateur($pPdo, &$pNom, &$pPrenom, &$pIdentifiant, &$pEmail, &$pMdp, &$pRole, &$pPromo)
    {
        try {
            $req="INSERT INTO utilisateur ( Id, Nom, Prenom, Identifiant, Email, Mdp, Role, Promo)"
            . " VALUES ( NULL, :Nom, :Prenom, :Identifiant, :Email, :Mdp, :Role, :Promo)";
            $pdo = $pPdo->getPdo();
            $res=$pdo->prepare($req);

            $res->bindValue(':Nom', $pNom, PDO::PARAM_STR);
            $res->bindValue(':Prenom', $pPrenom, PDO::PARAM_STR);
            $res->bindValue(':Identifiant', $pIdentifiant, PDO::PARAM_STR);
            $res->bindValue(':Email', $pEmail, PDO::PARAM_STR);
            $res->bindValue(':Mdp', $pMdp, PDO::PARAM_STR);
            $res->bindValue(':Role', $pRole, PDO::PARAM_STR);
            $res->bindValue(':Promo', $pPromo, PDO::PARAM_STR);

            // TODO : ajout automatique de la date connexion et creation.

            $res->execute();
        } catch (Exception $e) {
            ?>

            <p>Erreur : <?php $e->getMessage(); ?></p>

            <?php
        }
    }
}
?>
