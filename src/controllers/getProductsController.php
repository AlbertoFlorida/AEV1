<?php

namespace AEV1\controllers;
use AEV1\Core\DataBase;
use AEV1\Models\Clientes;
use AEV1\views\ListadoProductos;

class getProductsController
{
    public function getProducts():void{

        $task = new Clientes(new DataBase());
        new ListadoProductos($task->findAllProducts());
    }
}