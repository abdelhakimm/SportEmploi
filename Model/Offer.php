<?php
require "./DAO.php";
class Offer{
    private $Name_Offer;
    private $Name_Business;
    private $City;
    private $Week_Hours;
    private $Contrat_Type;
    private $Annual_Salary = NULL;
    private $Monthly_Pay = NULL;
    private $Description;

    public function __construct($Name_Offer,$Name_Business,$City,$Week_Hours,$Contrat_Type,$Description,$Annual_Salary = NULL,$Monthly_Pay = NULL){
        $this->Name_Offer = $Name_Offer;
        $this->Name_Business = $Name_Business;
        $this->City = $City;
        $this->Week_Hours = $Week_Hours;
        $this->Contrat_Type = $Contrat_Type;
        $this->Description = $Description;
        $this->Annual_Salary = $Annual_Salary;
        $this->Monthly_Pay = $Monthly_Pay;
    }
    
    public function createOffer(){
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO Offer(Name_Offer	Name_Business,City,Week_Hours,Contrat_Type,Annual_Salary,Monthly_Pay,Description)
        VALUES (:un,:deux,:trois,:quatre,:cinq,:six,:sept,:huit);");

        $stmt->bindParam(':un', $this->Name_Offer);
        $stmt->bindParam(':deux', $this->Name_Business);
        $stmt->bindParam(':trois', $this->City);
        $stmt->bindParam(':quatre', $this->Week_Hours);
        $stmt->bindParam(':cinq', $this->Contrat_Type);
        $stmt->bindParam(':six', $this->Annual_Salary);
        $stmt->bindParam(':sept', $this->Monthly_Pay);
        $stmt->bindParam(':huit', $this->Description);

        $stmt->execute();

    }
}
?>