<?php
require_once "../Model/Candidature.php";
class ControllerCandidature{

    public static function getAll(){
        

      $allCandidature = Candidature::getAllCandidature();
     require "../../View/V";
    }

    public static function getById($id){
        

        $Candidature = Candidature::getCandidatureByid($id);
        require "./View/View_Candidature/readCandidatureById.php";
    }

    public static function create($post){
        

        $Candidature = new Candidature($post['number'], $post['Candidature'], 
        $post['zip'], $post['city']);
        $Candidature->createCandidature();
        self::getAll();

    }

    public static function update($post){
        
         $Candidature = new Candidature($post['number'], $post['Candidature'], 
         $post['zip'], $post['city']);
        $Candidature->setId_Candidature($post["id"]);
        $Candidature->updateCandidature();
      
        self::getAll();
    }

    public static function deleteById($id){
       

        $Candidature = Candidature::deleteCandidatureById($id);
    
        self::getAll();
    }

    public static function formUpdate($id){
        $Candidature = Candidature::getCandidatureByid($id);
        require "./View/View_Candidature/formModif.php";
    }
    
}
