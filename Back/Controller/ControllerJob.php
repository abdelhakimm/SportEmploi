<?php

require_once "../Model/Job.php";

define('front', '../../View');

Class ControllerJob{

    public static function getAllJob(){
        echo "dans le controller getall";
        $allRows = Job::getAllJob();
        require front."/viewJob/allJob.php";
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
        
        $job = new Job($post['name'], $post['localisation'], 
        $post['start_date'], $post['type'], $post['hours_week'],
        $post['salary_month'], $post['description'], $post['employer'], $post['salary_year'], $post['end_date']);

        $job->setId_Job($post["id"]);
        $job->updateJob($post['name'], $post['localisation'], 
        $post['start_date'], $post['type'], $post['hours_week'],
        $post['salary_month'], $post['description'],$post['employer'], $post['salary_year'], $post['end_date']);
        self::getAllJob();
    }

    public static function deleteJobById($id){
       
        Job::deleteJobById($id);
        self::getAllJob();
    }

    public static function formUpdateJob($id_job){

        $job = Job::getJobByid($id_job);
        require front."/viewJob/formUpdateJob.php";
    }

    public static function formJob(){

        require front."/viewJob/formJob.php";
    }
}

?>