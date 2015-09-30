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
        
        $euro=166.386;
        $resultado = $_GET['peseta'] / $euro;
        echo "el resultado de la  conversion de $peseta a euro es: " ,  number_format($resultado,2);
        ?>
    </body>
</html>
