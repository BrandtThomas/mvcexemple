<?php 

class BddConnect{
    public $connexion;
    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=injection";
        $username = "root";
        $password = "";
        $this->connexion = new PDO($dsn, $username, $password);
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "vous êtes connecté à la bdd";
    }

    function readAll(){
        $sql = "SELECT * FROM `apprenants`";
        $request = $this->connexion->query($sql);
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    function insertBdd($param1, $param2, $param3){
        $sql = "INSERT INTO `apprenants`(`nom`, `prenom`, `mail`) VALUES ('$param1','$param2','$param3')";
        $this->connexion->query($sql);
        echo "data bien ajouté à la bdd";
    }

    }



?>