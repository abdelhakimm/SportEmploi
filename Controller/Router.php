<?php
require "./ControllerOffer.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
        ControllerOffer::getAll();

    }elseif($_GET["action"] == "id"){
        ControllerOffer::getById($_GET["id"]);

    }elseif($_GET["action"] == "update"){
        ControllerOffer::formUpdate($_GET["id"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerOffer::deleteById($_GET["id"]);
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["id"])){

        ControllerOffer::update($_POST);//enregistre le formulaire
     

    }else{

        ControllerOffer::create($_POST);
    }
}

?>