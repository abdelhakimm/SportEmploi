<?php

require_once "./DAO.php";

class Job
{

    private $id_Job;
    private $localisation;
    private $poste;
    private $begin;
    private $end;
    private $contract;
    private $hours;
    private $salary;
    private $description;

    public function __construct($localisation, $poste, $begin, $end, $contract, $hours, $salary, $description)
    {
        $this->localisation = $localisation;
        $this->poste = $poste;
        $this->begin = $begin;
        $this->end = $end;
        $this->contract = $contract;
        $this->hours = $hours;
        $this->salary = $salary;
        $this->description = $description;
    }

    public function afficher()
    {
        echo '<p>' . $this->localisation . ' ' . $this->poste . ' '
            . $this->begin . ' ' . $this->contract . '</p>';
    }

    public static function getAllJob()
    {

        $request = "SELECT * FROM Job ";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->query($request);
        $rows = $stmt->fetchAll();

        return $rows;
    }

    public function createJob()
    {

        $request = "INSERT INTO Job (localisation, poste, begin, end, Contract, hours, salary, description) 
            VALUES (:localisation, :poste, :begin, :end, :Contract, :hours, :salary, :description)";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare($request);

        $stmt->bindParam(":localisation", $this->localisation);
        $stmt->bindParam(":poste", $this->poste);
        $stmt->bindParam(":begin", $this->begin);
        $stmt->bindParam(":end", $this->end);
        $stmt->bindParam(":Contract", $this->contract);
        $stmt->bindParam(":hours", $this->hours);
        $stmt->bindParam(":salary", $this->salary);
        $stmt->bindParam(":description", $this->description);

        $stmt->execute();
    }

    public static function getJobById($id_Job)
    {

        $request = "SELECT * FROM Job WHERE id_Job = :id_Job";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare($request);
        $stmt->bindParam(":id_Job", $id_Job);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row;
    }

    public static function getJobByContract($post)
    {

        $dao = new DAO();
        $dbh = $dao->getDbh();
        

        // quand type de contrat non sélectionné, on affiche toutes les Jobs
        if ($post['typeContrat'] == 'all') {
            return self::getAllJob();
        } else {
            $request = "SELECT * FROM Job WHERE Contract = :contract";
            $stmt = $dbh->prepare($request);
            $stmt->bindParam(":contract", $post['typeContrat']);
            $stmt->execute();
            $rows = $stmt->fetchAll();
            return $rows;
        }
        
    }

    public function updateJob(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE Job SET (localisation, poste, begin, end, Contract, hours, salary, description) 
        VALUES (:localisation, :poste, :begin, :end, :Contract, :hours, :salary, :description");

       
        $stmt->bindParam(":localisation", $this->localisation);
        $stmt->bindParam(":poste", $this->poste);
        $stmt->bindParam(":begin", $this->begin);
        $stmt->bindParam(":end", $this->end);
        $stmt->bindParam(":Contract", $this->contract);
        $stmt->bindParam(":hours", $this->hours);
        $stmt->bindParam(":salary", $this->salary);
        $stmt->bindParam(":description", $this->description);
        
      return $stmt->execute();
    }

    public static function deleteJobById($id_Job){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM Job WHERE Id_Job = :id_Job;");
         $stmt->bindParam("id_Job",$id_Job);
         $stmt->execute();
 
        
         
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
     * Get the value of poste
     */ 
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set the value of poste
     *
     * @return  self
     */ 
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get the value of begin
     */ 
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Set the value of begin
     *
     * @return  self
     */ 
    public function setBegin($begin)
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Get the value of end
     */ 
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set the value of end
     *
     * @return  self
     */ 
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get the value of contract
     */ 
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Set the value of contract
     *
     * @return  self
     */ 
    public function setContract($contract)
    {
        $this->contract = $contract;

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
}
