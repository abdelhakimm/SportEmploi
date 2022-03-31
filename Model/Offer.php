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

    public function __construct($Name_Offer,$Name_Business,$City,$Week_Hours,$Contrat_Type,$Description,$Annual_Salary = NULL,$Monthly_Pay = NULL,$Begin = NULL,$Ending = NULL){
        $this->Name_Offer = $Name_Offer;
        $this->Name_Business = $Name_Business;
        $this->City = $City;
        $this->Week_Hours = $Week_Hours;
        $this->Contrat_Type = $Contrat_Type;
        $this->Description = $Description;
        $this->Annual_Salary = $Annual_Salary;
        $this->Monthly_Pay = $Monthly_Pay;
        $this->Begin = $Begin;
        $this->Ending = $Ending;
    }
    
    public function createOffer(){
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO Offer (Name_Offer, Name_Business, City, Week_Hours, Contrat_Type, Description, Annual_Salary, Monthly_Pay, Begin, Ending)
        VALUES (:un, :deux, :trois, :quatre, :cinq, :six, :sept, :huit, :neuf, :dix);");

        $stmt->bindParam(':un', $this->Name_Offer);
        $stmt->bindParam(':deux', $this->Name_Business);
        $stmt->bindParam(':trois', $this->City);
        $stmt->bindParam(':quatre', $this->Week_Hours);
        $stmt->bindParam(':cinq', $this->Contrat_Type);
        $stmt->bindParam(':six', $this->Annual_Salary);
        $stmt->bindParam(':sept', $this->Monthly_Pay);
        $stmt->bindParam(':huit', $this->Description);
        $stmt->bindParam(':neuf', $this->Begin);
        $stmt->bindParam(':dix', $this->Ending);
        $stmt->execute();

    }

    public static function updateOffer($Id_Offer,$Name_Offer,$City,$Begin,$Ending,$Contrat_Type,$Week_Hours,$Monthly_Pay,$Annual_Salary,$Description,$Name_Business,){
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("UPDATE Offer SET Name_Offer = :name_Offer, City = :City, Start_Date = :start_date, End_Date = :end_date, Type = :type, Hours_Week = :hours_week, Salary_Month = :salary_month, Salary_Year = :salary_year, Description = :description, Employer = :employer WHERE Id_Offer = :idOffer");
        $stmt->bindParam(':idOffer', $Id_Offer);
        $stmt->bindParam(':name_Offer', $Name_Offer);
        $stmt->bindParam(':City', $City);
        $stmt->bindParam(':start_date', $start_date);
        $stmt->bindParam(':end_date', $end_date);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':hours_week', $Week_Hours);
        $stmt->bindParam(':salary_month', $Monthly_Pay);
        $stmt->bindParam(':salary_year', $Annual_Salary);
        $stmt->bindParam(':description', $Description);
        $stmt->bindParam(':employer', $employer);
        $stmt->execute();
    }
    public static function deleteOfferById($Id_Offer){
        $dao = new DAO();
        $dbh = $dao->getDbh();

        $stmt = $dbh->prepare("DELETE FROM Offer WHERE Id_Offer = :idOffer");
        $stmt->bindParam(':idOffer', $Id_Offer);

        $stmt->execute();
    }

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
}
?>