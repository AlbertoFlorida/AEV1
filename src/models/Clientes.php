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

    public function findByName() {

        $url = $_SERVER['REQUEST_URI'];
        $name = str_replace('/DatosCliente/', '', $url);
        $formattedName = str_replace('/', ' ', $name);

        $sql = "SELECT * FROM cliente WHERE NOMBRE = '" . $formattedName . "'";
        $result = $this->database->executeSQL($sql);
        return array_shift($result);
    }

    public function findAllProducts(){
        $sql = "SELECT * FROM producto";
        return $this->database->executeSQL($sql);
    }


}