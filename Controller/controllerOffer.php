<?php
require_once "../Model/Offer.php";
Class ControllerOffer{


    public static function create($post){
        

        $offer = new Offer($post['name_post'], $post['name_business'], 
        $post['city'], $post['week_hours'], $post['contrat_type'], $post['description'], $post['annual_salary']);
        $offer->createOffer();


    }
    /*self::getAll();*/

}

?>