<?php

class Film
{


    /**
     * Method __construct sans parametre
     *
     * @return void
     */
    public function __construct()
    {
    }


    /**
     * Method listFilm
     * connexion à la base de onnées en PDO
     *try and catch gestion des erreurs et exceptions
     * Mot de passe non securise pour l exercice
     * @return void
     */
    public function listFilm()
    {

        $servername = 'localhost';
        $username = 'root';
        $password = '';



        try {
            $dbc = new PDO("mysql:host=$servername;dbname=netfloo", $username, $password);
            echo "Connexion à la BDD établie";


            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM film";
            $Film = $dbc->query($sql)->fetchAll();

            return $Film;
        } catch (PDOException $e) {


            switch ($e->getCode()):
                case 2002:
                    echo "Erreur de connexion à la base de données";
                    break;
                case 'HY000':
                    echo "Attention la BDD existe déjà";
                    break;
                default:
                    echo $e->getCode();
                    break;
            endswitch;
        }
    }
    public function detailProduct($id)
    {

        $servername = 'localhost';
        $username = 'root';
        $password = '';



        try {
            $dbc = new PDO("mysql:host=$servername;dbname=netfloo", $username, $password);
            //echo "Connexion à la BDD établie";


            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM film WHERE idFilm = $id";
            $Product = $dbc->query($sql)->fetchObject();

            return $Film;
        } catch (PDOException $e) {

            echo $e->getMessage();
            switch ($e->getCode()):
                case 2002:
                    echo "Erreur de connexion à la base de données";
                    break;
                case 'HY000':
                    echo "Attention la BDD existe déjà";
                    break;
                default:
                    echo $e->getCode();
                    break;
            endswitch;
        }
    }



}
