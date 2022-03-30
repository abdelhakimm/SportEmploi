<?php

require_once "DAO.php";

class Job{
    private $id_job;
    private $name_job;
    private $employer;
    private $localisation;
    private $start_date;
    private $end_date = NULL;
    private $type;
    private $hours_week;
    private $salary_month;
    private $salary_year = NULL;
    private $description;

    public function __construct($name_job,$employer,$localisation,$start_date,$type,$hours_week,$salary_month,$description,$salary_year = NULL,$end_date = NULL){
        $this->name_job = $name_job;
        $this->employer = $employer;
        $this->localisation = $localisation;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->type = $type;
        $this->hours_week = $hours_week;
        $this->salary_month = $salary_month;
        $this->salary_year = $salary_year;
        $this->description = $description;
        
    }

    /**
     * Get the value of id_Job
     */ 
    public function getId_Job()
    {
        return $this->id_Job;
    }

    /**
     * Set the value of id_Job
     *
     * @return  self
     */ 
    public function setId_Job($id_Job)
    {
        $this->id_Job = $id_Job;

        return $this;
    }

        /**
     * Get the value of name_job
     */ 
    public function getName_job()
    {
        return $this->name_job;
    }

    /**
     * Set the value of name_job
     *
     * @return  self
     */ 
    public function setName_job($name_job)
    {
        $this->name_job = $name_job;

        return $this;
    }
    
    /**
     * Get the value of employer
     */ 
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Set the value of employer
     *
     * @return  self
     */ 
    public function setEmployer($employer)
    {
        $this->employer = $employer;

        return $this;
    }

        /**
     * Get the value of localisation
     */ 
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set the value of localisation
     *
     * @return  self
     */ 
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get the value of start_date
     */ 
    public function getStart_date()
    {
        return $this->start_date;
    }

    /**
     * Set the value of start_date
     *
     * @return  self
     */ 
    public function setStart_date($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }

    /**
     * Get the value of end_date
     */ 
    public function getEnd_date()
    {
        return $this->end_date;
    }

    /**
     * Set the value of end_date
     *
     * @return  self
     */ 
    public function setEnd_date($end_date)
    {
        $this->end_date = $end_date;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of hours_week
     */ 
    public function getHours_week()
    {
        return $this->hours_week;
    }

    /**
     * Set the value of hours_week
     *
     * @return  self
     */ 
    public function setHours_week($hours_week)
    {
        $this->hours_week = $hours_week;

        return $this;
    }

    /**
     * Get the value of salary_month
     */ 
    public function getSalary_month()
    {
        return $this->salary_month;
    }

    /**
     * Set the value of salary_month
     *
     * @return  self
     */ 
    public function setSalary_month($salary_month)
    {
        $this->salary_month = $salary_month;

        return $this;
    }

    /**
     * Get the value of salary_year
     */ 
    public function getSalary_year()
    {
        return $this->salary_year;
    }

    /**
     * Set the value of salary_year
     *
     * @return  self
     */ 
    public function setSalary_year($salary_year)
    {
        $this->salary_year = $salary_year;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    public static function getAllJob(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM Job;");
        $stmt->execute();
        $allRows = $stmt->fetchAll();
        return $allRows;
    }
    public static function getJobById($id_job){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        
        $stmt = $dbh->prepare("SELECT * FROM Job WHERE Id_Job=:idJob;");
        $stmt->bindParam(":idJob", $id_job);
        
        $stmt->execute();

        return $stmt->fetch();
    }
    public static function createJob($name_job,$employer,$localisation,$star_date,$end_date,$type,$hours_week,$salary_month,$salary_year,$description){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt= $dbh->prepare("INSERT INTO Job (Name_Job, Localisation, Start_Date, End_Date, Type, Hours_Week, Salary_Month, Salary_Year, Description, Employer) VALUES (:name_job, :localisation, :start_date, :end_date, :type, :hours_week, :salary_month, :salary_year, :description, :employer)");
        $stmt->bindParam(':name_job', $name_job);
        $stmt->bindParam(':localisation', $localisation);
        $stmt->bindParam(':start_date', $start_date);
        $stmt->bindParam(':end_date', $end_date);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':hours_week', $hours_week);
        $stmt->bindParam(':salary_month', $salary_month);
        $stmt->bindParam(':salary_year', $salary_year);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':employer', $employer);

        $stmt->execute();
    }
    public static function updateJob($id_job,$name_job,$employer,$localisation,$star_date,$end_date,$type,$hours_week,$salary_month,$salary_year,$description){
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("UPDATE Job SET Name_Job = :name_job, Employer = :employer, Localisation = :localisation, Start_Date = :start_date, End_Date = :end_date, Type = :type, Hours_Week = :hours_week, Salary_Month = :salary_month, Salary_Year = :salary_year, Description = :description WHERE Id_Job = :idjob");
        $stmt->bindParam(':idjob', $id_job);
        $stmt->bindParam(':name_job', $name_job);
        $stmt->bindParam(':employer', $employer);
        $stmt->bindParam(':localisation', $localisation);
        $stmt->bindParam(':start_date', $start_date);
        $stmt->bindParam(':end_date', $end_date);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':hours_week', $hours_week);
        $stmt->bindParam(':salary_month', $salary_month);
        $stmt->bindParam(':salary_year', $salary_year);
        $stmt->bindParam(':description', $description);
        echo "apres bind param";
        $stmt->execute();
        echo "apres exec update";
    }
    public static function deleteJobById($id_employer){
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("DELETE FROM Job WHERE Id_Job = :idJob");
        $stmt->bindParam(':idemployer', $id_employer);

        $stmt->execute();
    }

}
