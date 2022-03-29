<?php
require "../Controller/ControllerAddress.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
        ControllerAddress::getAllAddress();

    }elseif($_GET["action"] == "id"){
        ControllerAddress::getAddressById($_GET["id"]);

    }elseif($_GET["action"] == "update"){
        ControllerAddress::updateAddress($_GET["id"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerAddress::deleteAddressById($_GET["id"]);
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["id"])){

        ControllerAddress::updateAddress($_POST);//enregistre le formulaire
     

    }else{

        ControllerAddress::createAddress($_POST);
    }
}

?>