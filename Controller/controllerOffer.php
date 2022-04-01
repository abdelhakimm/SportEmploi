<?php

include($_SERVER['DOCUMENT_ROOT']."/Sjob/SportEmploi/Model/Offer.php");
Class ControllerOffer{


    public static function getAllOffer(){
        $offers = Offer::getAllOffer();
        require "../View/offrePost.php";
    }

    /*public static function getOfferById($id_Offer){
        $row = Offer::getOfferByid($id_Offer);
        require "./View/offreById.php";
    }*/

    public static function createOffer($post){
        $Offer = new Offer($post['name_post'], $post['name_business'], $post['city'], $post['week_hours'], $post['contrat_type'], $post['description'], $post['annual_salary'], $post['monthly_pay'], $post['begin'], $post['ending']);

        $Offer->createOffer();
        self::getAllOffer();
    }

   /* public static function updateOffer($post){
        
        Offer::updateOffer($post['id_offer'], $post['name_post'], $post['city'], $post['contrat_type'], $post['week_hours'], $post['description'],$post['name_business'], $post['annual_salary'], $post['monthly_pay'], $post['begin'], $post['ending']);

        self::getAllOffer();
    }

    public static function deleteOfferById($id){
       
        Offer::deleteOfferById($id);
        self::getAllOffer();
    }

    /*public static function formUpdateOffer($id_Offer){

        $Offer = Offer::getOfferByid($id_Offer);
        require "/viewOffer/formUpdateOffer.php";
    }*/

    public static function formOffer(){

        require "./View";
    }

}

?>