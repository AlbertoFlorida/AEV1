<?php

namespace AEV1\controllers;
use AEV1\core\DataBase;
use AEV1\models\Clientes;
use AEV1\views\DatosCliente;

class getDataClientController
{
        public function getData($nombre = null):void{

            if(is_null($nombre)){
                $data = null;
            }else{
                $task = new Clientes(new DataBase());
                $data = $task->findByName($nombre);
            }
            $view = new DatosCliente($data);
        }
}