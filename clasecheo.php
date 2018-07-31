<<<<<<< HEAD
<?php
class Database extends PDO
{
 
 //dbname
 private $dbname = "hospitalv2";
 //host
 private $host = "localhost";
 //user database
 private $user = "postgres";
 //password user
 private $pass = 'clear
 ';
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
 
=======
<?php
class Database extends PDO
{
 
 //dbname
 private $dbname = "hospitalv2";
 //host
 private $host = "localhost";
 //user database
 private $user = "postgres";
 //password user
 private $pass = 'clear
 ';
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
 
>>>>>>> ebaa93d3cbb11a1941cfe864c2a7137d87ad8f4e
}