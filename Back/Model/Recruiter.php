<?php
require "c:/wamp64/www/SJOB/SportEmploi/Back/Model/DAO.php";

class Recruiter{
    private $idRecruiter;
    private $societyName;
    private $jobName;
    private $debutDate;
    private $endDate = NULL;
    private $contractType;
    private $hours;
    private $salary;
    private $city;
    private $description;
    

    public function __construct($societyName,$jobName,$debutDate,$endDate,$contractType,$hours,$salary,$city,$description){
        $this->societyName = $societyName;
        $this->jobName = $jobName;
        $this->debutDate = $debutDate;
        $this->endDate = $endDate;
        $this->contractType = $contractType;
        $this->hours = $hours;
        $this->salary = $salary;
        $this->city = $city;
        $this->description = $description;  
    }


    /**
     * Get the value of idRecruiter
     */ 
    public function getIdRecruiter()
    {
        return $this->idRecruiter;
    }

    /**
     * Set the value of idRecruiter
     *
     * @return  self
     */ 
    public function setIdRecruiter($idRecruiter)
    {
        $this->idRecruiter = $idRecruiter;

        return $this;
    }

    /**
     * Get the value of societyName
     */ 
    public function getSocietyName()
    {
        return $this->societyName;
    }

    /**
     * Set the value of societyName
     *
     * @return  self
     */ 
    public function setSocietyName($societyName)
    {
        $this->societyName = $societyName;

        return $this;
    }

    /**
     * Get the value of jobName
     */ 
    public function getJobName()
    {
        return $this->jobName;
    }

    /**
     * Set the value of jobName
     *
     * @return  self
     */ 
    public function setJobName($jobName)
    {
        $this->jobName = $jobName;

        return $this;
    }

    /**
     * Get the value of debutDate
     */ 
    public function getDebutDate()
    {
        return $this->debutDate;
    }

    /**
     * Set the value of debutDate
     *
     * @return  self
     */ 
    public function setDebutDate($debutDate)
    {
        $this->debutDate = $debutDate;

        return $this;
    }

    /**
     * Get the value of endDate
     */ 
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set the value of endDate
     *
     * @return  self
     */ 
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get the value of contractType
     */ 
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Set the value of contractType
     *
     * @return  self
     */ 
    public function setContractType($contractType)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get the value of hours
     */ 
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set the value of hours
     *
     * @return  self
     */ 
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

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


    public function createRecruiter(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO recruiter(idRecruiter,societyName,jobName,debutDate,endDate,contractType,hours,salary,city,description) 
        VALUES(:idRecruiter,:societyName,:jobName,:debutDate,:endDate,:contractType,:hours,:salary,:city,:description);");

       
        $stmt->bindParam(':idRecruiter',$this->idRecruiter);
        $stmt->bindParam(':societyName',$this->societyName);
        $stmt->bindParam(':jobName', $this->jobName);
        $stmt->bindParam(':debutDate',$this->debutDate);
        $stmt->bindParam(':endDate',$this->endDate);
        $stmt->bindParam(':contractType',$this->contractType);
        $stmt->bindParam(':hours',$this->hours);
        $stmt->bindParam(':salary',$this->salary);
        $stmt->bindParam(':city',$this->city);
        $stmt->bindParam(':description',$this->description);

        
        return $stmt->execute();

    }

    public static function getRecruiterById($idRecruiter){

        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM recruiter WHERE idRecruiter = :idRecruiter;");
        $stmt->bindParam("idRecruiter",$idRecruiter);
        $stmt->execute();
     
        return $stmt->fetch();
    }
     
    public static function getAllRecruiter(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
     
        $stmt = $dbh->prepare("SELECT * FROM recruiter");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateRecruiter(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE recruiter SET idRecruiter=:idRecruiter, societyName=:societyName jobName=:jobName, debutDate=:debutDate, endDate=:endDate,
        contractType=:contractType, hours=:hours, salary=:salary, city=:city, description=:description WHERE idRecruiter=:idRecruiter");

       
        $stmt->bindParam(':idRecruiter',$this->idRecruiter);
        $stmt->bindParam(':societyName',$this->societyName);
        $stmt->bindParam(':jobName', $this->jobName);
        $stmt->bindParam(':debutDate',$this->debutDate);
        $stmt->bindParam(':endDate',$this->endDate);
        $stmt->bindParam(':contractType',$this->contractType);
        $stmt->bindParam(':hours',$this->hours);
        $stmt->bindParam(':salary',$this->salary);
        $stmt->bindParam(':city',$this->city);
        $stmt->bindParam(':description',$this->description);

        
        return $stmt->execute();
    }
    
    public static function deleteRecruiterById($idRecruiter){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM recruiter WHERE idRecruiter = :idRecruiter;");
        $stmt->bindParam("idRecruiter",$idRecruiter);
        $stmt->execute();
         
    }

}


   