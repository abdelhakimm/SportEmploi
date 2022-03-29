<?php
require "../Controller/ControllerReservation.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
        ControllerReservation::getAllReservation();

    }elseif($_GET["action"] == "id"){
        ControllerReservation::getReservationById($_GET["id"]);

    }elseif($_GET["action"] == "update"){
        ControllerReservation::updateReservation($_GET["id"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerReservation::deleteReservationById($_GET["id"]);
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["id"])){

        ControllerReservation::updateReservation($_POST);//enregistre le formulaire
     

    }else{

        ControllerReservation::createReservation($_POST);
    }
}

?>