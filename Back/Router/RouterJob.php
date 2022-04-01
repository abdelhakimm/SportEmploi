<?php
require "../Controller/ControllerJob.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
        echo "eh oui";
        ControllerJob::getAll();

    }elseif($_GET["action"] == "id"){
        ControllerJob::getById($_GET["id"]);

    }elseif($_GET["action"] == "update"){
        ControllerJob::formUpdate($_GET["id"]);//envoi vers le formulaire

    }elseif($_GET["action"] == "delete"){
        ControllerJob::deleteById($_GET["id"]);
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["id"])){

        ControllerJob::update($_POST);//enregistre le formulaire
     

    }else{

        ControllerJob::create($_POST);
    }
}

?>