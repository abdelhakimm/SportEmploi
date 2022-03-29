<?php

require_once "DAO.php";

class Job{
    private $id_Job;
    private $name;
    private $employer;
    private $start_date;
    private $end_date = NULL;
    private $type;
    private $hours_week;
    private $salary_month;
    private $salary_year;
    private $description;

    public function __construct($name,$employer,$start_date,$type,$hours_week,$salary_month,$salary_year,$description,$end_date = NULL){
        $this->name = $name;
        $this->employer = $employer;
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

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
    public static function getJobById($id_Job){
        $dao = new DAO();
        $dbh = $dao->getDbh();
    
        $stmt = $dbh->prepare("SELECT * FROM Job WHERE Id_Job=:idJob;");
        $stmt->bindParam(":idJob", $id_Job);
    
        $stmt->execute();
    
        return $stmt->fetch();
    }
    public static function createJob($id_job,$name,$employer,$star_date,$end_date,$type,$hours_week,$salary_month,$salary_year,$description){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt= $dbh->prepare("INSERT INTO Job (Name, Employer, Start_date, End_date, Type, Hours_Week, Salary_Month, Salary_Year, Description) VALUES (:name, :employer, :start_date, :end_date, :type, :id_job)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':employer', $employer);
        $stmt->bindParam(':start_date', $start_date);
        $stmt->bindParam(':end_date', $end_date);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':hours_week', $hours_week);
        $stmt->bindParam(':salary_month', $salary_month);
        $stmt->bindParam(':salary_year', $salary_year);
        $stmt->bindParam(':description', $description);
        

        $stmt->execute();
    }
    

}
