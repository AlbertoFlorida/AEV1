<?php

namespace AEV1\core;

use AEV1\core\Interfaces\IRequest;

class Request implements IRequest
{
    private string $route;
    private array $params;

    public function __construct()
    {

        $rawRoute = $_SERVER["REQUEST_URI"];
        $rawRouteElements = explode("/",$rawRoute);
        $this->route = "/".$rawRouteElements[1];
        $this->params = array_slice($rawRouteElements, 2);

    }

    public function getRoute(): string
    {
        return $this->route;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}
