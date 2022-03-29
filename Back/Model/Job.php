<?php

require_once "DAO.php";

class Job{
    private $id_Job;
    private $start_date;
    private $end_date;
    private $type;
    private $hours_week;
    private $salary_month;
    private $salary_year;
    private $description;

    public function __construct($start_date,$end_date,$type,$hours_week,$salary_month,$id_job){
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->type = $type;
        $this->hours_week = $hours_week;
        $this->salary_month = $salary_month;
        $this->salary_year = $id_job;
    }
}