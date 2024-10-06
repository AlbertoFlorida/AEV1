<?php

namespace AEV1\controllers;
use AEV1\views\Portada;

class MainController
{
    public function showMenu(): void
    {
        $task = new Portada();
        $task->showImage();
    }
}