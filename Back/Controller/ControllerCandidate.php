<?php
require_once "../Model/Candidate.php";

define('front', '../../View');

Class ControllerCandidate{

    public static function getAllCandidate(){
        
      $allCandidate = Candidate::getAllCandidate();
     require front."/viewCandidate/allCandidate.php";
    }

    public static function getCandidateById($id){

        $Candidate = Candidate::getCandidateByid($id);
        require front."/viewCandidate/readCandidateById.php";
    }

    public static function createCandidate($post){
        
        $Candidate = new Candidate($post['firstname'], $post['lastname'], 
        $post['mail'], $post['phone'], $post['motivation'], $post['id_job']);

        $Candidate->createCandidate();
        self::getAllCandidate();
    }

    public static function updateCandidate($post){
        
        $Candidate = new Candidate($post['firstname'], $post['lastname'], 
        $post['mail'], $post['phone'], $post['motivation'], $post['id_job']);

        $Candidate->setId_Candidate($post["id_candidate"]);//pas neccessaire pour update
        $Candidate->updateCandidate($post['firstname'], $post['lastname'], 
        $post['mail'], $post['phone'], $post['motivation'], $post['id_job']);
        self::getAllCandidate();
    }

    public static function deleteCandidateById($id){
       
        $Candidate = Candidate::deleteCandidateById($id);
        self::getAllCandidate();
    }

    public static function formUpdateCandidate($id){

        $Candidate = Candidate::getCandidateByid($id);
        require front."/viewCandidate/formUpdateCandidate.php";
    }

    public static function formCandidate(){

        require front."/viewCandidate/formCandidate.php";
    }
}

?>