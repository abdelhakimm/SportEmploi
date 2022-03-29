<?php

require_once "../Model/Offre.php";

define("view", "../../View/View_Offer/");
define("router", "../Router/");

class Controller
{

    public static function getAllOffer()
    {
        $allOffer = Offre::getAllOffer();
        
        require view . "parcourirOffres.php";
    }

    
}
