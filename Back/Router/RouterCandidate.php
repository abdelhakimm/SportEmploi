<?php
require "../Controller/ControllerCandidate.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
        ControllerCandidate::getAllCandidate();

    }elseif($_GET["action"] == "idCandidate"){
        ControllerCandidate::getCandidateById($_GET["idCandidate"]);

    }elseif($_GET["action"] == "update"){
        ControllerCandidate::updateCandidate($_GET["idCandidate"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerCandidate::deleteCandidate($_GET["idCandidate"]);
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["idCandidate"])){

        ControllerCandidate::updateCandidate($_POST);//enregistre le formulaire
     

    }else{

        ControllerCandidate::createCandidate($_POST);
    }
}

?>