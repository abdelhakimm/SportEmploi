<?php

require_once "DAO.php";

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

    public static function getAllCandidature()
    {

        $request = "SELECT * FROM Candidature ";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->query($request);
        $rows = $stmt->fetchAll();

        return $rows;
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

}
