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
    
}
