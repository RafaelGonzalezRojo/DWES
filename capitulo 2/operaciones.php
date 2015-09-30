<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $resultado = $_GET['num1'] +  $_GET['num2'] ;
         echo "el resultado de la suma es $resultado <br>";
         $resultado = $_GET['num1'] /  $_GET['num2'] ;
          echo "el resultado de la division es $resultado <br>";
         $resultado = $_GET['num1'] *  $_GET['num2'] ;
          echo "el resultado de la multiplicacion es $resultado <br>";
         $resultado = $_GET['num1'] -  $_GET['num2'] ;
           echo "el resultado de la resta es $resultado <br>";
        ?>
    </body>
</html>
