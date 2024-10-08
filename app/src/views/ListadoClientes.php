<?php

namespace AEV1\views;

class ListadoClientes
{
    public function __construct(array $rows = null)
    {
        if (is_null($rows)) {
            echo "No se han recibido datos para mostrar en la vista de Detalle";
            echo "<p><a href='/'>volver</a></p>";
        } else {
            if (count($rows) > 0) {

                echo "<h2>LISTADO CLIENTES</h2>";
                echo "<h3>Selecciona un cliente</h3>";
                echo "<table style='border: 1px solid black; border-collapse: collapse;'>";

                foreach ($rows as $row) {
                    echo "<tr><td style='border: 1px black solid'><a href='/Cliente/" . $row["CLIENTE_COD"] . "'>" . $row["NOMBRE"] . "</a></td></tr>";
                }
                echo "</table><br>";
                echo "<p><a href='/'>MENU PRINCIPAL</a></p>";

            } else {
                echo "0 results";
                echo "<p><a href='/'>MENU PRINCIPAL</a></p>";
            }
        }
    }
}
