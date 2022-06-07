<?php
namespace Core;
use PDO;
use Core\ORM;

class Entity
{
    public $id;
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public function save()
    {
        $orm = new ORM();
        $orm->create($this->table, $this->data);
    }
}
