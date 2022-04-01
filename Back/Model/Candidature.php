<?php

require_once "./DAO.php";

class Candidature
{

    private $id_Candidature;
    private $name;
    private $firstname;
    private $email;
    private $phone;
    private $motivation;
    private $id_Job;
   
    public function __construct($name, $firstname, $email, $phone, $motivation, $id_Job)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->phone = $phone;
        $this->motivation = $motivation;
        $this->id_Job = $id_Job;
    }

    /*public static function getAllCandidature()
    {

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("SELECT * FROM Candidature;");
        $rows = $stmt->fetchAll();

        return $rows;

        
    }*/
    
    public static function getAllCandidature(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("SELECT * FROM Candidature;");
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function createCandidature()
    {

        $request = "INSERT INTO Candidature (Name, Firstname, Email, Phone, Motivation, id_Job) 
            VALUES (:Name, :Firstname, :Email, :Phone, :Motivation, :id_Job)";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare($request);

        $stmt->bindParam(":Name", $this->name);
        $stmt->bindParam(":Firstname", $this->firstname);
        $stmt->bindParam(":Email", $this->email);
        $stmt->bindParam(":Phone", $this->phone);
        $stmt->bindParam(":Motivation", $this->motivation);
        $stmt->bindParam(":id_Job", $this->id_Job);

        $stmt->execute();
    }

    public static function getCandidatureById($id_Candidature)
    {

        $request = "SELECT * FROM Candidature WHERE Id_Candidature = :id_Candidature";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare($request);
        $stmt->bindParam(":id_Candidature", $id_Candidature);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row;
    }

    public static function getCandidatureForJob($id_Job){

        $request = "SELECT * FROM Candidature WHERE id_Job = :id_Job";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare($request);
        $stmt->bindParam(":id_Job", $id_Job);
        $stmt->execute();
        $rows = $stmt->fetchAll();

        return $rows;

    }

    public function updateCandidature(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE Candidature SET (Name, Firstname, Email, Phone, Motivation, id_Job) 
        VALUES (:Name, :Firstname, :Email, :Phone, :Motivation, :id_Job");
       

       $stmt->bindParam(":Name", $this->name);
       $stmt->bindParam(":Firstname", $this->firstname);
       $stmt->bindParam(":Email", $this->email);
       $stmt->bindParam(":Phone", $this->phone);
       $stmt->bindParam(":Motivation", $this->motivation);
       $stmt->bindParam(":id_Job", $this->id_Job);
        
      return $stmt->execute();
    }




    public static function deleteCandidatureById($id_Candidature){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM Candidature WHERE Id_Candidature = :id_Candidature;");
         $stmt->bindParam("id_Candidature",$id_Candidature);
         $stmt->execute();
 
        
         
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
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

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
     * Get the value of id_Candidature
     */ 
    public function getId_Candidature()
    {
        return $this->id_Candidature;
    }

    /**
     * Set the value of id_Candidature
     *
     * @return  self
     */ 
    public function setId_Candidature($id_Candidature)
    {
        $this->id_Candidature = $id_Candidature;

        return $this;
    }
}
