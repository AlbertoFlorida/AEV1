<?php

namespace AEV1\models;

use AEV1\Core\Interfaces\IDataBase;

class Clientes
{
    private IDataBase $database;
    public function __construct(IDataBase $database)
    {
        $this->database = $database;
    }

    public function findAll(){
        $sql = "SELECT * FROM cliente";
        return $this->database->executeSQL($sql);
    }

    public function findById($clienteCod){
        $sql = "SELECT * FROM cliente WHERE CLIENTE_COD=$clienteCod";
        $result = $this->database->executeSQL($sql);
        return array_shift($result);
    }
}