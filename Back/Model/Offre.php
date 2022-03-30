<?php

require_once "DAO.php";

class Offre
{

    private $id_offer;
    private $position;
    private $enterprise;
    private $begin;
    private $end;
    private $contract;
    private $hours;
    private $salary;
    private $description;

    public function __construct($position, $enterprise, $begin, $end, $contract, $hours, $salary, $description)
    {
        $this->position = $position;
        $this->enterprise = $enterprise;
        $this->begin = $begin;
        $this->end = $end;
        $this->contract = $contract;
        $this->hours = $hours;
        $this->salary = $salary;
        $this->description = $description;
    }

    public function afficher()
    {
        echo '<p>' . $this->position . ' ' . $this->enterprise . ' '
            . $this->begin . ' ' . $this->contract . '</p>';
    }

    public static function getAllOffer()
    {
        
        $request = "SELECT * FROM offre ";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->query($request);
        $rows = $stmt->fetchAll();
        
        return $rows;
    }

    public function createOffer()
    {

        $request = "INSERT INTO Offre (Position, Enterprise, Begin, End, Contract, Hours, Salary, Description) 
            VALUES (:Position, :Enterprise, :Begin, :End, :Contract, :Hours, :Salary, :Description)";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare($request);

        $stmt->bindParam(":Position", $this->position);
        $stmt->bindParam(":Enterprise", $this->enterprise);
        $stmt->bindParam(":Begin", $this->begin);
        $stmt->bindParam(":End", $this->end);
        $stmt->bindParam(":Contract", $this->contract);
        $stmt->bindParam(":Hours", $this->hours);
        $stmt->bindParam(":Salary", $this->salary);
        $stmt->bindParam(":Description", $this->description);

        $stmt->execute();
    }

    public static function getOfferById($id_offer)
    {

        $request = "SELECT * FROM Offre WHERE Id_Offer = :id_offer";

        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare($request);
        $stmt->bindParam(":id_offer", $id_offer);
        $stmt->execute();
        $row = $stmt->fetch();
        
        return $row;
    }

    public static function getOffersByContract($post)
    {
        $request = "SELECT * FROM Offre WHERE Contract = :contract";

        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare($request);
        $stmt->bindParam(":contract", $post['typeContrat']);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        return $rows;
    }

}
