<?php
require_once "../Model/Candidature.php";
class ControllerCandidature{

    public static function getAll(){
        

      $allCandidature = Candidature::getAllCandidature();
     require "../../View/View_candidature/readAllCandidature.php";
    }

    public static function getById($id){
        

        $Candidature = Candidature::getCandidatureByid($id);
        require "../../View/View_candidature/readByIdCandidature.php";
    }

    public static function create($post){
        

        $Candidature = new Candidature($post['name'], $post['firstname'], 
        $post['email'], $post['phone'], $post['motivation'], $post['id_Job'] );
        $Candidature->createCandidature();
        self::getAll();

    }

    public static function update($post){
        
        $Candidature = new Candidature($post['name'], $post['firstname'], 
        $post['email'], $post['phone'], $post['motivation'], $post['id_Job'] );
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
