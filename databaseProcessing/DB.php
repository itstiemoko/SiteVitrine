<?php

    /*___________________Définition d'une classe en PHP________________________*/
    class DB
    {
        public $pdo; //Déclaration d'une variable pdo qui va contenir notre objet PDO

        public function __construct()
        {
            try
            {
                /*_______________Connexion à la base de donnée 'numeric_history'_______________________*/
                $this->pdo = new PDO("mysql:host=localhost;dbname=numeric_history", "root", "");
            }
            catch(PDOException $error)
            {
                echo "Erreur : ".$error->getMessage();
            }
        }

        /*____________________On définit une methode qui récupère tous les personnages de la base______________________________*/
        public function getPersonnages()
        {
            $req = $this->pdo->prepare("Select * From personnages;");
            $req->execute();

            $result = $req->fetchAll();
            return $result; //Retourne le résultat
        }

        /*__________________On définit une methode permettant de récupérer les personnages par ID___________________________*/
        public function getPersonnagesById($id)
        {
            $req = $this->pdo->prepare("Select * From personnages Where personnageId = ".$id);
            $req->execute();

            $result = $req->fetch();
            return $result;
        }
    }

    //L'instance de notre class DB(ou objet de la classe DB)
    $db = new DB();

?>