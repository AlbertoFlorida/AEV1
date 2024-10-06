<?php

namespace AEV1\controllers;
use AEV1\views\Menu;



class menuController
{
    public function getMenu(): void
    {
        $task = new Menu();
        $task->render();
    }
}