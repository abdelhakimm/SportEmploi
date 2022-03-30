<?php
require_once "../Model/Candidate.php";
Class ControllerCandidate{

    public static function getAllCandidate(){
        

      $allCandidate = Candidate::getAllCandidate();
     require_once "../../Front/frontCandidate/readAllCandidate.php";
    }

    public static function getCandidateById($idCandidate){
        

        $candidate = Candidate::getCandidateById($idCandidate);
        require_once "../../Front/frontCandidate/readCandidateById.php";
    }

    public static function createCandidate($post){
        

        $candidate = new Candidate($post['firstName'], $post['lastName'], 
        $post['eMail'], $post['phone'], $post['motivation']);
        $candidate->createCandidate();
        self::getAllCandidate();

    }

    public static function updateCandidate($post){
        
         $candidate = new Candidate($post['firstName'], $post['lastName'], 
         $post['eMail'], $post['phone'], $post['motivation']);
        $candidate->setIdCandidate($post["idCandidate"]);
        $candidate->updateCandidate();
      
        self::getAllCandidate();
    }

    public static function deleteCandidateById($idCandidate){
       

        $candidate = Candidate::deleteCandidateById($idCandidate);
    
        self::getAllCandidate();
    }
    
}

?>