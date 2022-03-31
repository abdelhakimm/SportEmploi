<?php

require_once "../Model/Offer.php";
Class ControllerOffer{


    public static function getAllOffer(){

        Offer::getAllOffer();
        include "../View/offrePost.php";
    }

    public static function getOfferById($id_Offer){
        $row = Offer::getOfferByid($id_Offer);
        require "./View/offreById.php";
    }

    public static function createOffer($post){

        $Offer = new Offer($post['name_post'], $post['city'], 
        $post['contrat_type'], $post['week_hours'],
        $post['description'],$post['name_business'], $post['annual_salary'],
        $post['monthly_pay'],$post['begin'], $post['ending']);

        $Offer->createOffer();
        self::getAllOffer();
    }

    public static function updateOffer($post){
        
        $Offer = new Offer($post['name_post'], $post['city'], 
        $post['contrat_type'], $post['week_hours'],
        $post['description'],$post['name_business'], $post['annual_salary'],
        $post['monthly_pay'],$post['begin'], $post['ending']);

        $Offer->setId_Offer($post["id"]);
        $Offer->updateOffer($post['name_post'], $post['city'], 
        $post['contrat_type'], $post['week_hours'],
        $post['description'],$post['name_business'], $post['annual_salary'],
        $post['monthly_pay'],$post['begin'], $post['ending']);
        self::getAllOffer();
    }

    public static function deleteOfferById($id){
       
        Offer::deleteOfferById($id);
        self::getAllOffer();
    }

    public static function formUpdateOffer($id_Offer){

        $Offer = Offer::getOfferByid($id_Offer);
        require front."/viewOffer/formUpdateOffer.php";
    }

    public static function formOffer(){

        require front."/viewOffer/formOffer.php";
    }

}

?>