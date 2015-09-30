<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Realiza un conversor de Mb a Kb
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <form action="C02ejercicio10.php">
             <fieldset>
             <legend>Entrada de datos</legend>
             
             <b>Convertidor de Megas</b><br> 
             megas a convertir: <input type="number" name="mega" min="0" max="1000000"><br>
            
        <input type="submit" value="Enviar">
             </fieldset>
             <br>
             
             <fieldset>
               
                    <?php
                   
                    $resultado = $_GET['mega'] * 1024;
                  
                   
                   
                    echo "Son " , number_format($resultado, 0) , " Kilobytes <br>";
                    
                     ?>   
            </fieldset>
        </form> 
    </body>
</html>
