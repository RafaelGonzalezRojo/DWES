<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Realiza un conversor de Kb a Mb.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     <form action="C02ejercicio11.php">
             <fieldset>
             <legend>Entrada de datos</legend>
             
             <b>Converitdor de Kilobytes</b><br> 
            Kilobytes a convertir: <input type="number" name="kilo" min="0" max="1000000"><br>
            
        <input type="submit" value="Enviar">
             </fieldset>
             <br>
             
             <fieldset>
               
                    <?php
                   
                    $resultado = $_GET['kilo'] / 1024;
                  
                   
                   
                    echo "Son " , number_format($resultado, 6) , " Megabytes <br>";
                    
                     ?>   
            </fieldset>
        </form> 
    </body>
</html>
