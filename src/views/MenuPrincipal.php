<?php

namespace AEV1\views;

class MenuPrincipal
{
    public function showMenu(): void
    {
        echo "<h1>MATERIAL DEPORTIVO</h1>";
        echo "<h2>Menu principal</h2>";

        echo "<table style='border: 1px solid black; border-collapse: collapse;'>";
        echo "<tr>";
        echo "<td style='border: 1px solid black; padding: 8px;'><a href='/Clientes' style='text-decoration: none; color: black;'>Clientes</a></td>";
        echo "<td style='border: 1px solid black; padding: 8px;'><a href='/Productos' style='text-decoration: none; color: black;'>Productos</a></td>";
        echo "</tr>";
        echo "</table>";
        echo "<img src='/images/material.png' alt='Descripción de la Imagen'>";
    }
}
