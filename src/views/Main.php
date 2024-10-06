<?php

namespace AEV1\views;

class Main
{
    public function show(): void
    {
        echo "<h1>MATERIAL DEPORTIVO MAGIVER</h1>";


        echo "<table style='border: 1px solid black; border-collapse: collapse;'>";
        echo "<tr>";
        echo "<td style='border: 1px solid black; padding: 8px;'><a href='/home' style='text-decoration: none; color: black;'>MENU PRINCIPAL</a></td>";
        echo "</tr>";
        echo "</table>";
        echo "<br>";
        echo "<img src='/images/macgiver.png' alt='Descripción de la Imagen'>";
    }
}
