<?php
require_once "../Model/Candidate.php";

define('front', '../../View');

Class ControllerCandidate{

    public static function getAllCandidate(){
        
      $allrows = Candidate::getAllCandidate();
     require front."/viewCandidate/allCandidate.php";
    }

    public static function getCandidateById($id){

        $row = Candidate::getCandidateByid($id);
        require front."/viewCandidate/readCandidateById.php";
    }

    public static function createCandidate($post){
        
        $row = new Candidate($post['firstname'], $post['lastname'], 
        $post['mail'], $post['phone'], $post['motivation'], $post['id_job']);

        $row->createCandidate();
        self::getAllCandidate();
    }

    public static function updateCandidate($post){
        
        $row = new Candidate($post['firstname'], $post['lastname'], 
        $post['mail'], $post['phone'], $post['motivation'], $post['id_job']);

        $row->setId_Candidate($post["id_candidate"]);//pas neccessaire pour update
        $row->updateCandidate($post['firstname'], $post['lastname'], 
        $post['mail'], $post['phone'], $post['motivation'], $post['id_job']);
        self::getAllCandidate();
    }

    public static function deleteCandidateById($id){
       
        $row = Candidate::deleteCandidateById($id);
        self::getAllCandidate();
    }

    public static function formUpdateCandidate($id){

        $row = Candidate::getCandidateByid($id);
        require front."/viewCandidate/formUpdateCandidate.php";
    }

    public static function formCandidate(){

        require front."/viewCandidate/formCandidate.php";
    }
}

?>