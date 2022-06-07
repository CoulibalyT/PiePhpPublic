<?php
namespace Model;
use PDO;
use PDOException;
use Core\Entity;
class UserModel extends Entity
{
    public $db;
    protected $table = 'user';

    public function __construct($params = null)
    {
        parent::__construct($params);

        $host = 'localhost';
        $dbname = 'cinema';
        $user = 'tenec';
        $pass = 'tene';

        try {
            $this->db = new PDO(
                "mysql:host=$host;dbname=$dbname",
                $user,
                $pass
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPass()
    {
        return $this->password;
    }

    public function setPass($val)
    {
        $this->password = $val; //modifier val du set pass
    }

    public function setEmail($val)
    {
        //modifier val du set email
        $this->email = $val;
    }

    public function findInfo($email)
    {
        $userMail = $this->db->query(
            "SELECT * FROM {$this->table} WHERE email = '$email'"
        );
        return $userMail->fetch(PDO::FETCH_ASSOC);
        // $sqlQuery = "select email from user where email='$email'";
        //     return $this->db->query($sqlQuery)->fetch(PDO::FETCH_ASSOC);
    }

    // public function findPassword($password)
    // {
    //         $userPass = $this->db->query("SELECT password FROM {$this->table} WHERE password = '$password'");
    //         return $userPass->fetch(PDO::FETCH_ASSOC);
    // }

    // public function FindOther($password)
    // {
    //         $userPass = $this->db->query("SELECT * FROM {$this->table} WHERE password = '$password'");
    //         return $userPass->fetch(PDO::FETCH_ASSOC);
    // }

    /////////////////////////////////////////////////CRUD////////////////////////////////////////////////////////////////
}
