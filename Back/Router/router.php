<?php
require "../Controller/Controller.php";

if (isset($_GET["action"])) {

    if ($_GET["action"] == "all") {
        Controller::getAllOffer();

    } elseif ($_GET["action"] == "id") {
        Controller::getAddressById($_GET["id"]);

    } elseif ($_GET["action"] == "update") {
        Controller::formUpdate($_GET["id"]); //envoi vers le formulaire

    } elseif ($_GET["action"] == "delete") {
        Controller::deleteAddressById($_GET["id"]);

    } elseif ($_GET["action"] == "create") {
        Controller::formCreate();

    }
} elseif (isset($_POST["submit"])) {


    if (isset($_POST["Id_Address"])) {

        Controller::updateAddress($_POST); //enregistre le formulaire


    } else {

        Controller::createAddress($_POST);
    }
}

?>
