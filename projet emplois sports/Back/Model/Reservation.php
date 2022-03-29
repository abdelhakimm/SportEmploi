<?php
require "./DAO.php";

class Reservation{
    private $id_reservation;
    private $places;
    private $date_reservation;
    private $hours;
    private $id_user = NULL;
    private $id_restaurant = NULL;

    public function __construct($places,$date_reservation,$hours){
        $this->places = $places;
        $this->date_reservation = $date_reservation;
        $this->hours = $hours;
        
    }
    
    /**
     * Get the value of places
     */ 
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Get the value of date_reservation
     */ 
    public function getDate_reservation()
    {
        return $this->date_reservation;
    }

    /**
     * Get the value of hours
     */ 
    public function getHours()
    {
        return $this->hours;
    }

    public function createReservation(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("INSERT INTO Reservation(places,date_reservation,hours) 
        VALUES(:places,:date_reservation,:hours);");

       

     $stmt->bindParam(':places',$this->places);
        $stmt->bindParam(':date_reservation', $this->date_reservation);
        $stmt->bindParam(':hours',$this->hours);
        
      return $stmt->execute();

    }

    public static function getReservationById($id_reservation){

            $dao = new DAO();
            $dbh = $dao->getDbh();
            $stmt = $dbh->prepare("SELECT * FROM Reservation WHERE Id_Reservation = :id_reservation;");
             $stmt->bindParam("id_reservation",$id_reservation);
             $stmt->execute();
     
             return $stmt->fetch();
    }
     
    public static function getAllReservation(){
             $dao = new DAO();
             $dbh = $dao->getDbh();
     
             $stmt = $dbh->prepare("SELECT * FROM Reservation;");
             $stmt->execute();
             return $stmt->fetchAll();
    }

    public function updateReservation(){
        $dao = new DAO();
        $dbh =$dao->getDbh();

        $stmt = $dbh->prepare("UPDATE Reservation SET places=:places, date_reservation=:date_reservation, hours=:hours WHERE Id_Reservation = :id_reservation;");

       

        $stmt->bindParam(':places',$this->places);
        $stmt->bindParam(':date_reservation', $this->date_reservation);
        $stmt->bindParam(':hours',$this->hours);
        
      return $stmt->execute();
    }

    public static function deletedate_reservationById($id_reservation){
        $dao = new DAO();
        $dbh = $dao->getDbh();
        $stmt = $dbh->prepare("DELETE FROM reservation WHERE Id_Reservation = :id_reservation;");
         $stmt->bindParam("id_reservation",$id_reservation);
         $stmt->execute();
 
        
         
    }



}


   