<?php

namespace AEV1\controllers;
use AEV1\views\Menu;




class mainController
{
    public function getMain(): void
    {
        $menu = new Menu();
        $menu->render();
    }

}