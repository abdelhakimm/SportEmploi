<?php
require "../Controller/ControllerCandidature.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
        echo "eh oui";
        ControllerCandidature::getAll();

    }elseif($_GET["action"] == "id"){
        ControllerCandidature::getById($_GET["id"]);

    }elseif($_GET["action"] == "update"){
        ControllerCandidature::formUpdate($_GET["id"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerCandidature::deleteById($_GET["id"]);
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["id"])){

        ControllerCandidature::update($_POST);//enregistre le formulaire
     

    }else{

        ControllerCandidature::create($_POST);
    }
}

?>