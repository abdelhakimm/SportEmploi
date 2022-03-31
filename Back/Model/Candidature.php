<?php

require "DAO.php";

class Address{
    
    private $id_address;
    private $number;
    private $address;
    private $zip;
    private $city;

    public function __construct($number,$address,$zip,$city){
        $this->number = $number;
        $this->address = $address;
        $this->zip = $zip;
        $this->city = $city;
        
    }
    


    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Get the value of zip
     */ 
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    public function createAddress(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO Address(Number,Address,Zip,City) 
        VALUES(:numb,:add,:zip,:city);");

       

     $stmt->bindParam(':numb',$this->number);
        $stmt->bindParam(':add', $this->address);
        $stmt->bindParam(':zip',$this->zip);

        $stmt->bindParam(':city',$this->city);
        
      return $stmt->execute();

           }

    public static function getAddressById($id_address){

            $dao = new DAO();
            $dbh = $dao->getDbh();
            $stmt = $dbh->prepare("SELECT * FROM Address WHERE Id_Address = :id_address;");
             $stmt->bindParam("id_address",$id_address);
             $stmt->execute();

             return $stmt->fetch();
    }
     
    public static function getAllAddress(){
             $dao = new DAO();
             $dbh = $dao->getDbh();
             $stmt = $dbh->prepare("SELECT * FROM Address;");
             $stmt->execute();
             
             return $stmt->fetchAll();
         }

    public function updateAddress(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE Address SET Number=:numb, Address=:add, Zip=:zip, City=:city WHERE Id_Address=:id_address");

       

        $stmt->bindParam(':numb',$this->number);
        $stmt->bindParam(':add', $this->address);
        $stmt->bindParam(':zip',$this->zip);
        $stmt->bindParam(':id_address',$this->id_address);
        $stmt->bindParam(':city',$this->city);
        
      return $stmt->execute();
    }
    public static function deleteAddressById($id_address){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM Address WHERE Id_Address = :id_address;");
         $stmt->bindParam("id_address",$id_address);
         $stmt->execute();
 
        
         
    }

    /**
     * Set the value of id_address
     *
     * @return  self
     */ 
    public function setId_address($id_address)
    {
        $this->id_address = $id_address;

        return $this;
    }
}


   