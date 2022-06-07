<?php
namespace Core;
use Core\Database;
use PDO;

// CREATE TABLE Persons (
//     PersonID int,
//     LastName varchar(255),
//     FirstName varchar(255),
//     Address varchar(255),
//     City varchar(255)
// );

class ORM extends Database
{
    public function create($table, $data)
    {
        $val = '';
        $cle = '';
        foreach ($data as $key => $value) {
            $cle .= $key . ', ';
            $val .= "'" . $value . "'" . ', ';
        }
        $cle = substr($cle, 0, -2);
        $val = substr($val, 0, -2);
        var_dump($val);

        $UserCreate = $this->db->prepare(
            "INSERT INTO $table ($cle) VALUES ($val)"
        );
        $UserCreate->execute();
        return $this->db->lastInsertId();
    }

    public function read($table, $id)
    {
        $userRead = $this->db->query("SELECT * from $table where id = '$id'");
        return $userRead->fetch(PDO::FETCH_ASSOC);
    }

    public function readAll($table)
    {
        $userRead = $this->db->query("SELECT * from $table");
        return $userRead->fetchAll();
    }

    public function update($table, $data, $id)
    {
        $valeur = '';
        foreach ($data as $key => $value) {
            $valeur .= $key . ' = ' . "'" . $value . "'" . ', ';
        }
        $valeur = substr($valeur, 0, -2);
        var_dump($valeur);

        $userUpdate = $this->db->prepare(
            "UPDATE $table SET $valeur where id = '$id'"
        );
        return $userUpdate->execute();
    }

    // $req = $this->db->getPDO()->prepare("UPDATE {$this->table} SET website = ? WHERE id = ?");
    //     $req->execute(array($Newwebsite, $_SESSION['id']));

    public function delete($table, $id)
    {
        $userDelete = $this->db->query("DELETE FROM $table where id = '$id'");
        return $userDelete->fetch(PDO::FETCH_ASSOC);
    }

    // public function readAll($){
    //     $userAll = $this->db->query("SELECT * from {$this->table}");
    //     return $userAll->fetch(PDO::FETCH_ASSOC);
    // }

    public function find($table, $params)
    {
        $sql_request = "SELECT * FROM $table";
        $val = '';
        $cle = '';
        foreach ($params as $key => $value) {
            $cle = $key;
            $val = $value;
        }
        $userFind = $this->db->query("$sql_request $cle $val");
        // var_dump($userFind);
        return $userFind->fetchAll(PDO::FETCH_ASSOC);
    }
}
