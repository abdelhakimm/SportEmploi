<?php
require_once "../Model/Recruiter.php";
Class ControllerRecruiter{

    public static function getAllRecruiter(){
     $allRecruiter = Recruiter::getAllRecruiter();
     require_once "../../Front/readAllRecruiter.php";
    }

    public static function getRecruiterByContractType($contractType){
     $recruiter = Recruiter::getRecruiterByid($contractType);
     require_once "../../Front/readRecruiterByContractType.php";
    }

    public static function createRecruiter($post){
        

        $recruiter = new Recruiter($post['societyName'], $post['jobName'], $post['debutDate'], $post['endDate'],
         $post['contractType'], $post['hours'], $post['salary'], $post['description'], $post['city']);
        $recruiter->createRecruiter();
        self::getAllRecruiter();

    }

    public static function updateRecruiter($post){
        
        $recruiter = new Recruiter($post['societyName'], $post['jobName'], $post['debutDate'], $post['endDate'],
         $post['contractType'], $post['hours'], $post['salary'], $post['description'], $post['city']);
        $recruiter->setId_Recruiter($post["id"]);
        $recruiter->updateRecruiter();
      
        self::getAllRecruiter();
    }

    public static function deleteRecruiterById($idRecruiter){
       

        $Recruiter = Recruiter::deleteRecruiterById($idRecruiter);
    
        self::getAllRecruiter();
    }

    public static function updateRecruiter($idRecruiter){
        $Recruiter = Recruiter::getRecruiterByid($idRecruiter);
        require_once "../../View/formUpdateRecruiter.php";
        var_dump()
    }
    
}

?>