<?php

namespace AEV1\controllers;
use AEV1\views\MenuPrincipal;



class MainController
{
    public function getMenu(): void
    {
        $task = new MenuPrincipal();
        $task->showMenu();
    }
}