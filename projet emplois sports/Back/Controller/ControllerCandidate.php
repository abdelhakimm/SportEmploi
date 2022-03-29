<?php
require_once "../Model/Candidate.php";
Class ControllerCandidate{

    public static function getAllCandidate(){
        

      $allCandidate = Candidate::getAllCandidate();
     require_once "../../View/readAllCandidate.php";
    }

    public static function getCandidateById($idCandidate){
        

        $Candidate = Candidate::getCandidateByid($idCandidate);
        require_once "../../View/readCandidateById.php";
    }

    public static function createCandidate($post){
        

        $Candidate = new Candidate($post['places'], $post['date_Candidate'], 
        $post['hours']);
        $Candidate->createCandidate();
        self::getAllCandidate();

    }

    public static function updateCandidate($post){
        
         $Candidate = new Candidate($post['places'], $post['date_Candidate'], 
         $post['hours']);
        $Candidate->setId_Candidate($post["id"]);
        $Candidate->updateCandidate();
      
        self::getAllCandidate();
    }

    public static function deleteCandidateById($idCandidate){
       

        $Candidate = Candidate::deleteCandidateById($idCandidate);
    
        self::getAllCandidate();
    }

    public static function updateCandidate($idCandidate){
        $Candidate = Candidate::getCandidateByid($idCandidate);
        require_once "../../View/formUpdateCandidate.php";
    }
    
}

?>