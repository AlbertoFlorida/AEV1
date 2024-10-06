<?php

namespace AEV1\controllers;
use AEV1\core\DataBase;
use AEV1\models\Clientes;
use AEV1\views\MostrarCliente;

class getClientController
{
    public function getClient($clienteCod = null):void{
        if(is_null($clienteCod)){
            $data = null;

        }else{
            $task = new Clientes(new DataBase());
            $data = $task->findById($clienteCod);
        }
        $view = new MostrarCliente($data);

    }
}