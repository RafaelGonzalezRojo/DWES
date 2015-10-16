<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
los tres arrays dispuesto en tres columnas.


-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1 Capitulo 5</title>
    </head>
    <style>
    table, td, th {
    border: 5px solid blueviolet;
    }
    td {
     text-align: center;   
    }
    body {
     color: #FFFFFF;   
     background-color: #453423;   
    }
    </style>
    <body>
        <?php
             echo "<b>arrays:</b><br>";
        
            echo "<table style='width:100%; border:1px;'>";         
            echo "<tr><td><h3>numero</h3></td><td><h3>cuadrado</h3></td><td><h3>cubo</h3></td></tr>";
            for ($i = 0; $i < 20; $i++) {
               echo "<tr>";   
            // números aleatorios entre 0 y 10 (ambos incluidos)
            $numero[$i] = rand(0, 100);
            echo "<td> " , $numero[$i] ,"</td>";
            $cuadrado[$i] = pow($numero[$i],2);
             echo "<td> " , $cuadrado[$i] ,"</td>";
             $cubo[$i] = pow($numero[$i],3);
                echo "<td> " , $cubo[$i] ,"</td>";
                  echo "</tr>";
            }
             echo "</table>";
             
        ?>
       
    </body>
</html>
