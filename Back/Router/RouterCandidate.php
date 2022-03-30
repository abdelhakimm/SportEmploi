<?php
require "../Controller/ControllerCandidate.php";

if(isset($_GET["action"])){

    if($_GET["action"] == "all"){
        ControllerCandidate::getAllCandidate();

    }elseif($_GET["action"] == "id"){
        ControllerCandidate::getCandidateById($_GET["id"]);

    }elseif($_GET["action"] == "update"){
        ControllerCandidate::formUpdateCandidate($_GET["id"]);//send to form

    }elseif($_GET["action"] == "delete"){
        ControllerCandidate::deleteCandidateById($_GET["id"]);

    }elseif($_GET["action"] == "create"){
        ControllerCandidate::formCandidate($_GET["Id_Job"]);
    }

}elseif(isset($_POST["submit"])){
   

    if(isset($_POST["id"])){

        ControllerCandidate::updateCandidate($_POST);//record form
     

    }else{

        ControllerCandidate::createCandidate($_POST);
    }
}

?>