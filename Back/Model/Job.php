<?php

require_once "DAO.php";

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
}
