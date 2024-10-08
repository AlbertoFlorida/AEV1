<?php

namespace AEV1\core;

use AEV1\core\Interfaces\IRoute;

class RouteCollection implements IRoute {
    private mixed $routes;

    function __construct()
    {
        $this->routes = json_decode(file_get_contents(__DIR__ . "/../../config/rutas.json"),true);
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}

