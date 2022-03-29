<?php

require_once "DAO.php";

class Candidate{
    private $id_candidate;
    private $firstname;
    private $lastname;
    private $phone;
    private $mail;
    private $motivation;
    private $id_job;

    public function __construct($firstname,$lastname,$phone,$mail,$motivation,$id_job){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->mail = $mail;
        $this->motivation = $motivation;
        $this->id_job = $id_job;
    }
    /**
     * Get the value of id_candidate
     */ 
    public function getId_candidate()
    {
        return $this->id_candidate;
    }

    /**
     * Set the value of id_candidate
     *
     * @return  self
     */ 
    public function setId_candidate($id_candidate)
    {
        $this->id_candidate = $id_candidate;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of motivation
     */ 
    public function getMotivation()
    {
        return $this->motivation;
    }

    /**
     * Set the value of motivation
     *
     * @return  self
     */ 
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;

        return $this;
    }

    /**
     * Get the value of id_job
     */ 
    public function getId_job()
    {
        return $this->id_job;
    }

    /**
     * Set the value of id_job
     *
     * @return  self
     */ 
    public function setId_job($id_job)
    {
        $this->id_job = $id_job;

        return $this;
    }
    public static function getAllCandidate(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM Candidate;");
    
        $stmt->execute();
        $allRows = $stmt->fetchAll();
    
        return $allRows;
    }
    public static function getCandidateById($id_lastname){
        $dao = new DAO();
        $dbh = $dao->getDbh();
    
        $stmt = $dbh->prepare("SELECT * FROM Candidate WHERE Id_Candidate=:idcandidate;");
        $stmt->bindParam(":idcandidate", $id_candidate);
    
        $stmt->execute();
    
        return $stmt->fetch();
    }
    public function createCandidate(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt= $dbh->prepare("INSERT INTO Candidate (Firstname, Lastname, Phone, Mail, Motivation, Id_Job) VALUES (:Firstname, :lastname, :phone, :mail, :motivation, :id_job)");
        $stmt->bindParam(':Firstname', $this->Firstname);
        $stmt->bindParam(':lastname', $this->lastname);
        $stmt->bindParam(':phone', $this->phone);
        $stmt->bindParam(':mail', $this->mail);
        $stmt->bindParam(':motivation', $this->motivation);
        $stmt->bindParam(':id_job', $this->id_job);

        $stmt->execute();
    }
    public static function updateCandidate($id_lastname,$Firstname,$lastname,$phone,$mail,$motivation){
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("UPDATE Candidate SET Firstname = :Firstname, lastname = :lastname, phone = :phone, Mail = :mail WHERE Id_Candidate = :idcandidate");
        $stmt->bindParam(':idcandidate', $id_candidate);
        $stmt->bindParam(':Firstname', $Firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':motivation', $mmotivation);
        $stmt->bindParam(':id_job', $id_job);

        $stmt->execute();
    }
    public static function deleteCandidateById($id_lastname){
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("DELETE FROM Candidate WHERE Id_candidate = :idcandidate");
        $stmt->bindParam(':idlastname', $id_lastname);

        $stmt->execute();
    }
}
