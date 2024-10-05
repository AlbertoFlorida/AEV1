<?php

namespace AEV1\core;


use AEV1\core\Interfaces\IRequest;
use AEV1\core\Interfaces\IRoute;

class Dispatcher
{
    private $routeList;
    private IRequest $currentRequest;

    public function __construct(IRoute $routeCollection, IRequest $request)
    {
        $this->routeList = $routeCollection->getRoutes();
        $this->currentRequest = $request;
        $this->dispatch();
    }

    private function dispatch(): void
    {
        if(isset($this->routeList[$this->currentRequest->getRoute()])){

            $controllerClass = "AEV1\\Controllers\\".$this->routeList[$this->currentRequest->getRoute()]["controller"];
            $controller = new $controllerClass;
            $action = $this->routeList[$this->currentRequest->getRoute()]["action"];

            if(!is_null($this->currentRequest->getParams())){
                $controller->$action(...$this->currentRequest->getParams());
            }else{
                $controller->$action();
            }
        }else{
            echo "La ruta no esta definda";
        }
    }
}