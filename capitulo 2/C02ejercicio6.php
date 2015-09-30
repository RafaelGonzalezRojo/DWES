<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que calcule el área de un triángulo.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="C02ejercicio6.php">
             <fieldset>
             <legend>Entrada de datos</legend>
             
             <b>Area del Triangulo</b><br> 
       Altura<input type="text" name="alt"><br>
       Base<input type="text" name="bas"><br>
        <input type="submit" value="Enviar">
             </fieldset>
             <fieldset>
                <legend>
                    <?php
                        
                    $resultado = $_GET['alt'] * $_GET['bas'] / 2;
                    
                    echo "El resultado del triangulo es: " , number_format($resultado, 2);
                        
                        ?>
                    
                
                </legend>
            </fieldset>
        </form> 
        
    </body>
</html>
