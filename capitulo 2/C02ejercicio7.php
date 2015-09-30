<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que calcule el total de una factura a partir de la base imponible.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
         <form action="C02ejercicio7.php">
             <fieldset>
             <legend>Entrada de datos</legend>
             
             <b>Factura</b><br> 
       Precio<input type="text" name="fac"><br>
       Impuesto<input type="text" name="impuesto"><br>
       Descuento<input type="text" name="descuento"><br>
        <input type="submit" value="Enviar">
             </fieldset>
             <br>
             
             <fieldset>
               
                    <?php
                    $descuento = $_GET['descuento']; 
                    $impuesto = $_GET['impuesto'];
                    $fac = $_GET['fac'];
                    $resultado = ($_GET['fac'] * $impuesto / 100) + $_GET['fac'] - $_GET['descuento'] ;
                  
                   
                   
                    echo "el importe es:" , number_format($fac, 2) , "<br>";
                    echo "impuesto es:" , number_format($impuesto, 2) , "<br>";
                    echo "descuento es: " , number_format($descuento, 2) , "<br>";
                    echo "El resultado de la factura es: " , number_format($resultado, 2) , "<br>";
                     ?>   
            </fieldset>
        </form> 
        
        
    </body>
</html>
