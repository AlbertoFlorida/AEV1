<?php

namespace AEV1\views;

class DatosCliente
{
    public function __construct(array $row = null)
    {
        if (is_null($row)) {
            echo "No se han recibido datos para mostrar en la vista del Listado";
            echo "<p><a href='/'>volver</a></p>";
        } else {
            if (count($row) > 0) {

                echo "<h2>DATOS CLIENTE</h2>";
                echo "<table border='1' style=' border-collapse: collapse;'>";
                echo "<tr><td>NOMBRE</td><td>" . $row["NOMBRE"] . "</td></tr>";
                echo "<tr><td>DIREC</td><td>" . $row["DIREC"] . "</td></tr>";
                echo "<tr><td>CIUDAD</td><td>" . $row["CIUDAD"] . "</td></tr>";
                echo "<tr><td>COD_POSTAL</td><td>" . $row["COD_POSTAL"] . "</td></tr>";
                echo "<tr><td>AREA</td><td>" . $row["AREA"] . "</td></tr>";
                echo "<tr><td>TELEFONO</td><td>" . $row["TELEFONO"] . "</td></tr>";
                echo "<tr><td>REPR_COD</td><td>" . $row["REPR_COD"] . "</td></tr>";
                echo "<tr><td>LIMITE_CREDITO</td><td>" . $row["LIMITE_CREDITO"] . "</td></tr>";
                echo "<tr><td>OBSERVACIONES</td><td>" . $row["OBSERVACIONES"] . "</td></tr>";
                echo "</table><br>";
                echo "<td><a href='/Clientes'>ATRÁS</a></td><br><br>";
                echo "<td><a href='/'>MENU PRINCIPAL</a></td>";

            } else {
                echo "0 results";
                echo "<p><a href='/'>volver</a></p>";
            }
        }
    }
}

