<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 1/3 πr2 h.
utilizo pi() y pow para hacer la formula dado que en php hay formulas para ello.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="C02ejercicio9.php">
             <fieldset>
             <legend>Entrada de datos</legend>
             
             <b>Calculo de Volumen</b><br> 
       Altura: <input type="text" name="h"><br>
        Radio: <input type="text" name="r"><br>
        <input type="submit" value="Enviar">
             </fieldset>
             <br>
             
             <fieldset>
        
        
        <?php
                
                $volumen = 0.33 * (pi() * pow($_GET['r'], 2)) * $_GET['h'];
               echo "el volumen total es: " , number_format( $volumen, 2) , "<br>";
                
        ?>
    </body>
</html>
