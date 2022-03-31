<?php
require_once "../Model/Recruiter.php";
Class ControllerRecruiter{

    public static function getAllRecruiter(){
        $allRecruiter = Recruiter::getAllRecruiter();
        require_once "../../Front/frontRecruiter/readAllRecruiter.php"; 
    }

    public static function getRecruiterById($idRecruiter){
        $recruiter = Recruiter::getRecruiterById($idRecruiter);
        require_once "../../Front/frontRecruiter/readRecruiterById.php";    
    }

    public static function createRecruiter($post){

        $recruiter = new Recruiter($post['idRecruiter'], $post['societyName'], $post['jobName'], $post['debutDate'], $post['endDate'],
        $post['contractType'], $post['hours'], $post['salary'], $post['city'], $post['description']);

        $recruiter->createRecruiter();
        self::getAllRecruiter();
        
    }

    public static function updateRecruiter($idRecruiter){
        
        $recruiter = new Recruiter($post['idRecruiter'], $post['societyName'], $post['jobName'], $post['debutDate'], $post['endDate'],
        $post['contractType'], $post['hours'], $post['salary'], $post['city'], $post['description']);

        $recruiter->setIdRecruiter($post["idRecruiter"]);
        $recruiter->updateRecruiter();
      
        self::getAllRecruiter($idRecruiter);  
    }

    public static function deleteRecruiterById($idRecruiter){
        $recruiter = Recruiter::deleteRecruiterById($idRecruiter);
    
        self::getAllRecruiter();
        
    }
    
}

?>