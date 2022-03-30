<?php
require "../Controller/ControllerRecruiter.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
        ControllerRecruiter::getAllRecruiter();

    }elseif($_GET["action"] == "contractType"){
        ControllerRecruiter::getRecruiterByContractType($_GET["contractType"]);

    }elseif($_GET["action"] == "contractType"){
        ControllerRecruiter::getRecruiterById($_GET["idRecruiter"]);

    }elseif($_GET["action"] == "update"){
        ControllerRecruiter::updateRecruiter($_GET["idRecruiter"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerRecruiter::deleteRecruiterByIdRecruiter($_GET["idRecruiter"]);
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["idRecruiter"])){

        ControllerRecruiter::updateRecruiter($_POST);//enregistre le formulaire
     

    }else{

        ControllerRecruiter::createRecruiter($_POST);
    }
}

?>