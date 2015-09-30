<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas.
Se pagarán 12 euros por hora.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="C02ejercicio8.php">
             <fieldset>
             <legend>Entrada de datos</legend>
             
             <b>Factura</b><br> 
             Dias Trabajados: <input type="number" name="dia" min="1" max="7"><br>
             horas trabajadas: <input type="number" name="hora" min="1" max="8"><br>
        <input type="submit" value="Enviar">
             </fieldset>
             <br>
             
             <fieldset>
               
                    <?php
                   
                    $resultado = ($_GET['dia'] * $_GET['hora']) * 12;
                  
                   
                   
                    echo "el salario total del trabajador es: " , number_format($resultado, 2) , " € <br>";
                    
                     ?>   
            </fieldset>
        </form> 
        
        
        
        
    </body>
</html>
