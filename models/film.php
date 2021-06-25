<?php

class Film
{


    public function __construct()
    {
    }


    public function listFilm()
    {

        $servername = 'localhost';
        $username = 'root';
        $password = '';



        try {
            $dbc = new PDO("mysql:host=$servername;dbname=netfloo", $username, $password);
            echo "Connexion à la BDD établie";


            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM product";
            $Product = $dbc->query($sql)->fetchAll();

            return $Product;
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
}