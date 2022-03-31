<?php

class DAO{

    public $host = "localhost";
    public $port = "8889";
    public $dbname = "Sjob";
    public $charset = "UTF8";
    public $user = "root";
    public $password = "root";
    public $dsn;
    public $dbh;

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
