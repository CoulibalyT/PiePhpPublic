<?php

namespace Core;
use PDOException;
use PDO;
class Database
{
    protected $db;

    public function __construct()
    {
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
}
