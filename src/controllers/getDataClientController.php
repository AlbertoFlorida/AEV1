<?php

namespace AEV1\controllers;
use AEV1\core\DataBase;
use AEV1\models\Clientes;
use AEV1\views\DatosCliente;

class getDataClientController
{
        public function getData($clienteCod = null):void{
            if(is_null($clienteCod)){
                $data = null;
            }else{
                $tarea = new Clientes(new DataBase());
                $data = $tarea->findById($clienteCod);
            }
            $view = new DatosCliente($data);
        }
}