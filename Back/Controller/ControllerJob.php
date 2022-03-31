<?php

include($_SERVER['DOCUMENT_ROOT']."/Sjob/SportEmploi/Back/Model/Job.php");
define(front, "../../view");
Class ControllerJob{

    public static function getAllJob(){

        $allRows =Job::getAllJob();
        include front."/viewJob/allJob.php";
    }

    public static function getJobById($id_job){
        $row = Job::getJobByid($id_job);
        require front."/viewJob/readJobById.php";
    }

    public static function createJob($post){

        $job = new Job($post['name'], $post['localisation'], 
        $post['start_date'], $post['type'], $post['hours_week'],
        $post['salary_month'], $post['description'],$post['employer'], $post['salary_year'], $post['end_date']);

        $job->createJob();
        self::getAllJob();
    }

    public static function updateJob($post){
        
        Job::updateJob($post['id'], $post['name_job'], $post['localisation'], 
        $post['start_date'], $post['end_date'], $post['type'], $post['hours_week'],
        $post['salary_month'], $post['salary_year'], $post['description'], $post['employer']);

        self::getAllJob();
    }

    public static function deleteJobById($id){
       
        Job::deleteJobById($id);
        self::getAllJob();
    }

    public static function formUpdateJob($id_job){

        $row = Job::getJobByid($id_job);
        require front."/viewJob/formUpdateJob.php";
    }

    public static function formJob(){

        require front."/viewJob/formJob.php";
    }
}

?>