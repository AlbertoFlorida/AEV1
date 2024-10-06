<?php

namespace AEV1\views;

class MostrarCliente
{
    public function __construct(array $row = null)
    {
        if (is_null($row)) {
            echo "No se han recibido datos para mostrar en la vista del Listado";
            echo "<p><a href='/home'>volver</a></p>";
        } else {
            if (count($row) > 0) {

                echo "<h2>CLIENTE</h2>";
                echo "<table border='1' style=' border-collapse: collapse;'>";
                echo "<tr><td>" . ($row["NOMBRE"]) . "</td></tr>";
                echo "</table><br>";

                $formattedName = str_replace(' ', '/', $row["NOMBRE"]);

                echo "<td><a href='/DatosCliente/" . $formattedName. "'>MOSTRAR DATOS DE CLIENTE</a></td><br><br><br>";
                echo "<td><a href='/Clientes'>ATRÁS</a></td><br><br>";
                echo "<td><a href='/home'>MENU PRINCIPAL</a></td>";

            } else {
                echo "0 results";
                echo "<p><a href='/home'>volver</a></p>";
            }
        }
    }
}

