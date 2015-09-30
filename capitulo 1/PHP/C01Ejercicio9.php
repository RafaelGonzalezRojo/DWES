<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar
almacenada en una variable.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $peseta=500;
        $euro=166.386;
        $resultado = $peseta / $euro;
        echo "el resultado de la  conversion de $peseta a euro es: $resultado";
        ?>        
    </body>
</html>
