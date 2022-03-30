<?php

require_once "DAO.php";

class Application
{

    private $id_application;
    private $name;
    private $firstname;
    private $email;
    private $phone;
    private $motivation;
   
    public function __construct($name, $firstname, $email, $phone, $motivation)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->phone = $phone;
        $this->motivation = $motivation;
    }

    public static function getAllApplication()
    {

        $request = "SELECT * FROM application ";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->query($request);
        $rows = $stmt->fetchAll();

        return $rows;
    }

    public function createApplication()
    {

        $request = "INSERT INTO Application (Name, Firstname, Email, Phone, Motivation) 
            VALUES (:Name, :Firstname, :Email, :Phone, :Motivation)";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare($request);

        $stmt->bindParam(":Name", $this->name);
        $stmt->bindParam(":Firstname", $this->firstname);
        $stmt->bindParam(":Email", $this->email);
        $stmt->bindParam(":Phone", $this->phone);
        $stmt->bindParam(":Motivation", $this->motivation);

        $stmt->execute();
    }

    public static function getApplicationById($id_application)
    {

        $request = "SELECT * FROM Application WHERE Id_Application = :id_application";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare($request);
        $stmt->bindParam(":id_application", $id_application);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row;
    }

    public static function getApplicationForOffer($Id_Offer){

        $request = "SELECT * FROM Application WHERE Id_Offer = :id_offer";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare($request);
        $stmt->bindParam(":id_offer", $Id_Offer);
        $stmt->execute();
        $rows = $stmt->fetchAll();

        return $rows;

    }

}
