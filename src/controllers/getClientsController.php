<?php

namespace AEV1\controllers;
use AEV1\Core\DataBase;
use AEV1\Models\Clientes;
use AEV1\Views\ListadoClientes;

class getClientsController
{
    public function getClients():void{

        $tarea = new Clientes(new DataBase());
        new ListadoClientes($tarea->findAll());
    }
}