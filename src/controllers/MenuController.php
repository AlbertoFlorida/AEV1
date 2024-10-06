<?php

namespace AEV1\controllers;
use AEV1\views\Menu;



class MenuController
{
    public function getMenu(): void
    {
        $task = new Menu();
        $task->showMenu();
    }
}