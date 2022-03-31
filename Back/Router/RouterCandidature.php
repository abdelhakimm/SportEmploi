<?php
require "../Controller/ControllerAddress.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
        echo "eh oui";
        ControllerAddress::getAll();

    }elseif($_GET["action"] == "id"){
        ControllerAddress::getById($_GET["id"]);

    }elseif($_GET["action"] == "update"){
        ControllerAddress::formUpdate($_GET["id"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerAddress::deleteById($_GET["id"]);
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["id"])){

        ControllerAddress::update($_POST);//enregistre le formulaire
     

    }else{

        ControllerAddress::create($_POST);
    }
}

?>