<?php
require_once("clasecheo.php");
require_once("user.php");
 
class User implements IUser
{
 private $con;
    private $id;
    private $username;
    private $password;
 
 public function __construct(Database $db)
 {
 $this->con = new $db;
 }
 
    public function setId($id)
    {
        $this->id = $id;
    }
 
    public function setUsername($username)
    {
        $this->username = $username;
    }
 
    public function setPassword($password)
    {
        $this->password = $password;
    }
 
 //insertamos usuarios en una tabla con postgreSql
 public function save()
 {
 try{
 $query = $this->con->prepare('INSERT INTO users (username, password) values (?,?)');
            $query->bindParam(1, $this->username, PDO::PARAM_STR);
 $query->bindParam(2, $this->password, PDO::PARAM_STR);
 $query->execute();
 $this->con->close();
 }
        catch(PDOException $e)
        {
         echo  $e->getMessage();
     }
 }
 
    public function update()
 {
 try{
 $query = $this->con->prepare('UPDATE users SET username = ?, password = ? WHERE id = ?');
 $query->bindParam(1, $this->username, PDO::PARAM_STR);
 $query->bindParam(2, $this->password, PDO::PARAM_STR);
            $query->bindParam(3, $this->id, PDO::PARAM_INT);
 $query->execute();
 $this->con->close();
 }
        catch(PDOException $e)
        {
         echo  $e->getMessage();
     }
 }
 
 //obtenemos usuarios de una tabla con postgreSql
 public function get()
 {
 try{
            if(is_int($this->id))
            {
                $query = $this->con->prepare('SELECT * FROM users WHERE id = ?');
                $query->bindParam(1, $this->id, PDO::PARAM_INT);
                $query->execute();
     $this->con->close();
     return $query->fetch(PDO::FETCH_OBJ);
            }
            else
            {
                $query = $this->con->prepare('SELECT * FROM users');
     $query->execute();
     $this->con->close();
     return $query->fetchAll(PDO::FETCH_OBJ);
            }
 }
        catch(PDOException $e)
        {
         echo  $e->getMessage();
     }
 }
 
    public function delete()
    {
        try{
            $query = $this->con->prepare('DELETE FROM users WHERE id = ?');
            $query->bindParam(1, $this->id, PDO::PARAM_INT);
            $query->execute();
            $this->con->close();
            return true;
        }
        catch(PDOException $e)
        {
            echo  $e->getMessage();
        }
    }
 
    public static function baseurl()
    {
         return stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['HTTP_HOST'] . "/php/crudpgsql/";
    }
 
    public function checkUser($user)
    {
        if( ! $user )
        {
            header("Location:" . User::baseurl() . "app/list.php");
        }
    }
}