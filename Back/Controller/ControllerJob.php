<?php
require_once "../Model/Address.php";
class ControllerAddress{

    public static function getAll(){
        

      $allAddress = Address::getAllAddress();
     require "../../View/View_Address/readAllAddress.php";
    }

    public static function getById($id){
        

        $address = Address::getAddressByid($id);
        require "./View/View_Address/readAddressById.php";
    }

    public static function create($post){
        

        $address = new Address($post['number'], $post['address'], 
        $post['zip'], $post['city']);
        $address->createAddress();
        self::getAll();

    }

    public static function update($post){
        
         $address = new Address($post['number'], $post['address'], 
         $post['zip'], $post['city']);
        $address->setId_address($post["id"]);
        $address->updateAddress();
      
        self::getAll();
    }

    public static function deleteById($id){
       

        $address = Address::deleteAddressById($id);
    
        self::getAll();
    }

    public static function formUpdate($id){
        $address = Address::getAddressByid($id);
        require "./View/View_Address/formModif.php";
    }
    
}
