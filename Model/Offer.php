<?php
require "DAO.php";
class Offer{
    private $Name_Offer;
    private $Name_Business;
    private $City;
    private $Week_Hours;
    private $Contrat_Type;
    private $Annual_Salary = NULL;
    private $Monthly_Pay = NULL;
    private $Description;
    private $Begin = NULL;
    private $Ending = NULL;

    public function __construct($Name_Offer, $Name_Business, $City, $Week_Hours, $Contrat_Type, $Description, $Annual_Salary = NULL, $Monthly_Pay = NULL, $Begin = NULL, $Ending = NULL){
        $this->Name_Offer = $Name_Offer;
        $this->Name_Business = $Name_Business;
        $this->City = $City;
        $this->Week_Hours = (int)$Week_Hours;
        $this->Contrat_Type = $Contrat_Type;
        $this->Description = $Description;
        $this->Annual_Salary = (int)$Annual_Salary;
        $this->Monthly_Pay = $Monthly_Pay;
        $this->Begin = $Begin;
        $this->Ending = $Ending;
    }
    
    public function createOffer(){
        $dao = new DAO();
        $dbh = $dao->getDbh();
       
       $stmt = $dbh->prepare("INSERT INTO Offer (Name_Offer, Name_Business, City, Week_Hours, Contrat_Type, Description, Annual_Salary, Monthly_Pay, Begin, Ending) VALUES (:un, :deux, :trois, :quatre, :cinq, :six, :sept, :huit, :neuf, :dix);");
       
       $stmt->bindParam(':un', $this->Name_Offer);
        $stmt->bindParam(':deux', $this->Name_Business);
        $stmt->bindParam(':trois', $this->City);
        $stmt->bindParam(':quatre', $this->Week_Hours);
        $stmt->bindParam(':cinq', $this->Contrat_Type);
        $stmt->bindParam(':six', $this->Description);
        $stmt->bindParam(':sept', $this->Annual_Salary);
        $stmt->bindParam(':huit', $this->Monthly_Pay);
        $stmt->bindParam(':neuf', $this->Begin);
        $stmt->bindParam(':dix', $this->Ending);
        
        $stmt->execute();
    }

   /* public static function updateOffer($Id_Offer,$Name_Offer,$City,$Contrat_Type,$Week_Hours,$Monthly_Pay,$Annual_Salary,$Description,$Name_Business,$Begin,$Ending){
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("UPDATE Offer SET Name_Offer = :name_Offer, City = :City, Begin = :begin, Ending = :ending, Contrat_Type = :contrat_type, Week_Hours = :week_hours, Monthly_Pay = :monthly_pay, Annual_Salary = :annual_salary, Description = :description, Name_Business = :name_business WHERE Id_Offer = :idoffer");
        $stmt->bindParam(':idoffer', $Id_Offer);
        $stmt->bindParam(':name_Offer', $Name_Offer);
        $stmt->bindParam(':City', $City);
        $stmt->bindParam(':contrat_type', $Contrat_Type);
        $stmt->bindParam(':week_hours', $Week_Hours);
        $stmt->bindParam(':description', $Description);
        $stmt->bindParam(':name_business', $Name_Business);
        $stmt->bindParam(':annual_salary', $Annual_Salary);
        $stmt->bindParam(':monthly_pay', $Monthly_Pay);
        $stmt->bindParam(':begin', $Begin);
        $stmt->bindParam(':ending', $Ending);
        $stmt->execute();
    }
    public static function deleteOfferById($Id_Offer){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM Offer WHERE Id_Offer = :idoffer");
        $stmt->bindParam(':idoffer', $Id_Offer);
        $stmt->execute();
    }

    */public static function getAllOffer(){

        $dao = new DAO();

        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("SELECT * FROM Offer;");
        $stmt->execute();
        $allRows = $stmt->fetchAll();
        return $allRows;
    }
    /*public static function getOfferById($Id_Offer){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        
        $stmt = $dbh->prepare("SELECT * FROM Offer WHERE Id_Offer=:idoffer;");
        $stmt->bindParam(":idoffer", $Id_Offer);
        
        $stmt->execute();

        return $stmt->fetch();
    }*/

    /**
     * Get the value of Name_Offer
     */ 
    public function getName_Offer()
    {
        return $this->Name_Offer;
    }

    /**
     * Set the value of Name_Offer
     *
     * @return  self
     */ 
    public function setName_Offer($Name_Offer)
    {
        $this->Name_Offer = $Name_Offer;

        return $this;
    }

    /**
     * Get the value of Name_Business
     */ 
    public function getName_Business()
    {
        return $this->Name_Business;
    }

    /**
     * Set the value of Name_Business
     *
     * @return  self
     */ 
    public function setName_Business($Name_Business)
    {
        $this->Name_Business = $Name_Business;

        return $this;
    }

    /**
     * Get the value of City
     */ 
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set the value of City
     *
     * @return  self
     */ 
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * Get the value of Week_Hours
     */ 
    public function getWeek_Hours()
    {
        return $this->Week_Hours;
    }

    /**
     * Set the value of Week_Hours
     *
     * @return  self
     */ 
    public function setWeek_Hours($Week_Hours)
    {
        $this->Week_Hours = $Week_Hours;

        return $this;
    }

    /**
     * Get the value of Contrat_Type
     */ 
    public function getContrat_Type()
    {
        return $this->Contrat_Type;
    }

    /**
     * Set the value of Contrat_Type
     *
     * @return  self
     */ 
    public function setContrat_Type($Contrat_Type)
    {
        $this->Contrat_Type = $Contrat_Type;

        return $this;
    }

    /**
     * Get the value of Annual_Salary
     */ 
    public function getAnnual_Salary()
    {
        return $this->Annual_Salary;
    }

    /**
     * Set the value of Annual_Salary
     *
     * @return  self
     */ 
    public function setAnnual_Salary($Annual_Salary)
    {
        $this->Annual_Salary = $Annual_Salary;

        return $this;
    }

    /**
     * Get the value of Monthly_Pay
     */ 
    public function getMonthly_Pay()
    {
        return $this->Monthly_Pay;
    }

    /**
     * Set the value of Monthly_Pay
     *
     * @return  self
     */ 
    public function setMonthly_Pay($Monthly_Pay)
    {
        $this->Monthly_Pay = $Monthly_Pay;

        return $this;
    }

    /**
     * Get the value of Description
     */ 
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set the value of Description
     *
     * @return  self
     */ 
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * Get the value of Begin
     */ 
    public function getBegin()
    {
        return $this->Begin;
    }

    /**
     * Set the value of Begin
     *
     * @return  self
     */ 
    public function setBegin($Begin)
    {
        $this->Begin = $Begin;

        return $this;
    }

    /**
     * Get the value of Ending
     */ 
    public function getEnding()
    {
        return $this->Ending;
    }

    /**
     * Set the value of Ending
     *
     * @return  self
     */ 
    public function setEnding($Ending)
    {
        $this->Ending = $Ending;

        return $this;
    }
}
?>