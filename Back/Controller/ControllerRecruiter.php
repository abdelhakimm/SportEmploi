<?php
require_once "../Model/Recruiter.php";
Class ControllerRecruiter{

    public static function getAllRecruiter(){
     $allRecruiter = Recruiter::getAllRecruiter();
     require_once "../../Front/frontRecruiter/readAllRecruiter.php";
     
    }

    public static function getRecruiterByContractType($contractType){
     $recruiter = Recruiter::getRecruiterByContractType($contractType);
     require_once "../../Front/frontRecruiter/readRecruiterByContractType.php";
     
    }

    public static function getRecruiterById($idRecruiter){
        $recruiter = Recruiter::getRecruiterById($idRecruiter);
        require_once "../../Front/frontRecruiter/readRecruiterById.php";
        
    }

    public static function createRecruiter($post){
        $hours =$post['hou'] + $post['rs'] ;

        $recruiter = new Recruiter($post['societyName'], $post['jobName'], $post['debutDate'], $post['endDate'],
         $post['contractType'], $hours /*, $post['salary']*/, $post['description'], $post['city']);
        $recruiter->createRecruiter();
        self::getAllRecruiter();
        

    }

    public static function updateRecruiter($post){
        
        $recruiter = new Recruiter($post['societyName'], $post['jobName'], $post['debutDate'], $post['endDate'],
         $post['contractType'], $post['hours'], $post['salary'], $post['description'], $post['city']);
        $recruiter->setIdRecruiter($post["idRecruiter"]);
        $recruiter->updateRecruiter();
      
        self::getAllRecruiter();
        
    }

    public static function deleteRecruiterById($idRecruiter){
        $recruiter = Recruiter::deleteRecruiterById($idRecruiter);
    
        self::getAllRecruiter();
        
    }

    /*public static function updateRecruiter($idRecruiter){
        $recruiter = Recruiter::getRecruiterById($idRecruiter);
        require_once "../../Front/frontRecruiter/formUpdateRecruiter.php";
    }*/
    
}

?>