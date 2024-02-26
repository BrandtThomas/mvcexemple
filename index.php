<?php 

require_once "controllers/Controller.php";

$controller = new Controller;

$controller->index();


if (isset($_GET['page']) && $_GET['page'] == "lecture"){
    $controller->affichageApprenants();
}

if (isset($_GET['page']) && $_GET['page'] == "inscription"){
    $controller->affichageInscription();
}

if (isset($_POST['submit'])){
    $controller->addApprenants();
}