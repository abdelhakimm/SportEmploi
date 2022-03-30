<?php

require_once "../Model/Offre.php";
require_once "../Model/Application.php";

define("view", "../../View/View_Offer/");
define("router", "../Router/");

class Controller
{

    public static function getAllOffer()
    {
        $allOffer = Offre::getAllOffer();
        
        require view . "parcourirOffres.php";
    }

    public static function getAllApplication()
    {
        $allApplication = Application::getAllApplication();

        require view . "parcourirApplication.php";
    }

    public static function createOffer($post)
    {
        $offer = new Offre(
            $post['position'],
            $post['enterprise'],
            $post['beginDate'],
            $post['endDate'],
            $post['contract'],
            $post['hours'],
            $post['salary'],
            $post['description']
        );
        $offer->createOffer();
        
        self::getAllOffer();
    }

    public static function formCreate()
    {
        require view . "publierOffre.php";
    }

    public static function getOfferById($id_offer)
    {
        $offer = Offre::getOfferById($id_offer);
        $allApplication = Application::getApplicationForOffer($id_offer);
        require view . "detailsOffre.php";
    }

    public static function candidater($id_offer)
    {
        $offer = Offre::getOfferById($id_offer);
        require view . "candidater.php";
    }

    public static function createApplication($post)
    {
        $application = new Application(
            $post['name'],
            $post['firstname'],
            $post['email'],
            $post['phone'],
            $post['motivation'],
            $post['id_offer']
        );
        $application->createApplication();

        self::getAllOffer();
    }

}


