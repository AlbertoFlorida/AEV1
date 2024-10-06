<?php

namespace AEV1\controllers;
use AEV1\Core\DataBase;
use AEV1\Models\Clientes;
use AEV1\Views\ListadoClientes;

class ClientsController
{
    public function getClients():void{

        $task = new Clientes(new DataBase());
        new ListadoClientes($task->findAll());
    }
}