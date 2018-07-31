<?php
class Database extends PDO
{
 
 //dbname
 private $dbname = "hospitalv2";
 //host
 private $host = "localhost";
 //user database
 private $user = "cheo";
 //password user
 private $pass = 'cheo117';
 //port
 private $port = 5432;
    //instance
 private $dbh;
 
 //connect with postgresql and pdo
 public function __construct()
 {
     try {
         $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");
     }
        catch(PDOException $e)
        {
         echo  $e->getMessage();
     }
 
 }
 
 //función para cerrar una conexión pdo
 public function close()
 {
    	$this->dbh = null;
 }
}