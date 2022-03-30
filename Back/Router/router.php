<?php

require "../Controller/Controller.php";

if (isset($_GET["action"])) {

    if ($_GET["action"] == "all") {
        Controller::getAllOffer();
    } elseif ($_GET["action"] == "create") {
        Controller::formCreate();
    } elseif ($_GET["action"] == "id") {
        Controller::getOfferById($_GET["id"]);
    } elseif ($_GET["action"] == "candidater") {
        Controller::candidater($_GET["id"]);
    }
} elseif (isset($_POST["submit"])) {

    if (isset($_POST["Id_Application"])) {

        Controller::createApplication($_POST); 

    } elseif(isset($_POST["typeContrat"])){
        Controller::getOffersByContract($_POST);

    }else {
        Controller::createOffer($_POST);
    }
}
