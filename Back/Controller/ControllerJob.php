<?php

require_once "../Model/Job.php";

define('front', '../../View');

Class ControllerJob{

    public static function getAllJob(){
        $allRows = Job::getAllJob();
        require front."/viewJob/allJob.php";
    }

    public static function getJobById($id_job){
        $row = Job::getJobByid($id_job);
        require front."/viewJob/readJobById.php";
    }

    public static function createJob($post){
        echo "dans controller createjob";
        Job::createJob($post['name_job'], $post['localisation'], 
        $post['start_date'], $post['end_date'], $post['type'], $post['hours_week'],
        $post['salary_month'], $post['salary_year'], $post['description'], $post['employer']);

        self::getAllJob();
    }

    public static function updateJob($post){
        
        $Job = new Job($post['name'], $post['localisation'], 
        $post['start_date'], $post['end_date'], $post['type'], $post['hours_week'],
        $post['salary_month'], $post['salary_year'], $post['description'], $post['employer']);

        $Job->setId_Job($post["id_Job"]);//pas neccessaire pour update
        $Job->updateJob($post['name'], $post['localisation'], 
        $post['start_date'], $post['end_date'], $post['type'], $post['hours_week'],
        $post['salary_month'], $post['salary_year'], $post['description'], $post['employer']);
        self::getAllJob();
    }

    public static function deleteJobById($id){
       
        $Job = Job::deleteJobById($id);
        self::getAllJob();
    }

    public static function formUpdateJob($id){

        $Job = Job::getJobByid($id);
        require front."/viewJob/formUpdateJob.php";
    }

    public static function formJob(){

        require front."/viewJob/formJob.php";
    }
}

?>