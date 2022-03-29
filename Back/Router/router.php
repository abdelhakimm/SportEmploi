<?php
require "../Controller/ControllerOffer.php";

if (isset($_GET["action"])) {

    if ($_GET["action"] == "all") {
        Controller::getAllOffer();
    }
}
