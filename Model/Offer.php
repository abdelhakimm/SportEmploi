<?php
require "./DAO.php";
class Offer{
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
    
}
?>