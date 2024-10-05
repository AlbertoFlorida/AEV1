<?php

namespace AEV1\views;

class ListadoProductos
{
    public function __construct(array $rows = null)
    {
        if (is_null($rows)) {
            echo "No se han recibido datos para mostrar en la vista de Detalle";
            echo "<p><a href='/'>volver</a></p>";
        } else {
            if (count($rows) > 0) {

                echo "<h2>LISTADO PRODUCTOS</h2>";
                echo "<table style='border: 1px solid black; border-collapse: collapse;'>";

                foreach ($rows as $row) {
                    echo "<tr>";
                    echo "<td style='border: 1px black solid'>" . $row["PROD_NUM"] . "</td>";
                    echo "<td style='border: 1px black solid'>" . $row["DESCRIPCION"] . "</td>";
                    echo "</tr>";
                }
                echo "</table><br>";
                echo "<td><a href='/'>volver</a></td>";

            } else {
                echo "0 results";
                echo "<p><a href='/'>volver</a></p>";
            }
        }
    }
}
