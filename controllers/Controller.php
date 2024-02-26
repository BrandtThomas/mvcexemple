<?php 

require_once "models/BddConnect.php";

class Controller {


    function index(){
        require_once "views/header.php";
    }

    function affichageApprenants(){
        $conn = new BddConnect;
        $data = $conn->readAll();
        
        foreach ($data as $value){
            var_dump($value);
            echo "<br>";
        }
    }

    function affichageInscription(){
        require "views/inscription.php";
    }

    function addApprenants(){
        $conn = new BddConnect;
        $conn->insertBdd($_POST['nom'], $_POST['prenom'], $_POST['mail']);
    }
}


?>