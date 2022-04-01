<?php
require_once "../../Back/Model/Job.php";
class ControllerJob{

    public static function getAll(){
        

      $allJob = Job::getAllJob();
     require "../../View/View_Offre/readAllOffre.php";
    }

    public static function getById($id){
        

        $Job = Job::getJobByid($id);
        require "../../View/View_Offre/readIdOffre.php";
    }

    public static function create($post){
        

        $Job = new Job($post['localisation'], $post['poste'], 
        $post['begin'], $post['end'], $post['contract'], $post['hours'], $post['salary'], $post['description']);
        $Job->createJob();
        self::getAll();

    }

    public static function update($post){
        
        $Job = new Job($post['localisation'], $post['poste'], 
        $post['begin'], $post['end'], $post['contract'], $post['hours'], $post['salary'], $post['description']);
        $Job->setId_Job($post["id"]);
        $Job->updateJob();
      
        self::getAll();
    }

    public static function deleteById($id){
       

        $Job = Job::deleteJobById($id);
    
        self::getAll();
    }

    public static function formUpdate($id){
        $Job = Job::getJobByid($id);
        require "../../View/View_Offre/formUpdate.php";
    }
    
}
