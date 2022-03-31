<?php

class DAO{

    private $host="localhost";
    private $port = "8889";
    private $dbname ="Sportcarriere";
    private $charset = "UTF8";
    private $user = "root";
    private $password= "root";
    private $dsn;
    private $dbh;

    public function __construct()
    {
        $this->dsn="mysql:host=$this->host:$this->port;dbname=$this->dbname;charset=$this->charset";

            try{
                $this->dbh =  new PDO($this->dsn,$this->user,$this->password);
            }catch(PDOException $e){
                $e->getMessage();
            }
    }
    /**
     * Get the value of dbh
     */ 
    public function getDbh()
    {
        return $this->dbh;
    }
}

