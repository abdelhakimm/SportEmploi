<?php
require "./DAO.php";

class Candidate{
    private $idCandidate;
    private $firstName;
    private $lastName;
    private $eMail;
    private $phone;
    private $motivation;

    public function __construct($firstName,$lastName,$eMail,$phone,$motivation){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->eMail = $eMail;
        $this->phone = $phone;;
        $this->motivation = $motivation
    }
    
    /**
     * Get the value of idCandidate
     */ 
    public function getIdCandidate()
    {
        return $this->idCandidate;
    }

    /**
     * Set the value of idCandidate
     *
     * @return  self
     */ 
    public function setIdCandidate($idCandidate)
    {
        $this->idCandidate = $idCandidate;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of eMail
     */ 
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set the value of eMail
     *
     * @return  self
     */ 
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

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

    public function createCandidate(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO Candidate(firstName,lastName,eMail,phone,motivation) 
        VALUES(:firstName,:lastName,:eMail,:phone,:motivation);");

       

        $stmt->bindParam(':firstName',$this->firstName);
        $stmt->bindParam(':lastName', $this->lastName);
        $stmt->bindParam(':eMail',$this->eMail);
        $stmt->bindParam(':phone',$this->phone);
        $stmt->bindParam(':motivation',$this->motivation);
        
      return $stmt->execute();

    }

    public static function getCandidateById($idCandidate){

        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM Candidate WHERE idCandidate = :idCandidate;");
        $stmt->bindParam("idCandidate",$idCandidate);
        $stmt->execute();
     
        return $stmt->fetch();
    }
     
    public static function getAllCandidate(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
     
        $stmt = $dbh->prepare("SELECT * FROM Candidate;");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function uplastName(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE Candidate SET firstName=:firstName, lastName=:lastName, eMail=:eMail, phone=:phone, motivation=:motivation WHERE Id_Candidate = :id_Candidate;");

       

        $stmt->bindParam(':firstName',$this->firstName);
        $stmt->bindParam(':lastName', $this->lastName);
        $stmt->bindParam(':eMail',$this->eMail);
        $stmt->bindParam(':phone',$this->phone);
        $stmt->bindParam(':motivation',$this->motivation);
        
      return $stmt->execute();
    }

    public static function deletelastNameById($id_Candidate){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM Candidate WHERE Id_Candidate = :id_Candidate;");
        $stmt->bindParam("id_Candidate",$id_Candidate);
        $stmt->execute();
         
    }

}


   