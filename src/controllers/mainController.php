<?php

namespace AEV1\controllers;
use AEV1\views\Main;

class mainController
{
    public function showMenu(): void
    {
        $task = new main();
        $task->show();
    }
}