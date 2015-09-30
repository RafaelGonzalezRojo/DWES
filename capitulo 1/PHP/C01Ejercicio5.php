<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Escribe un programa que utilice las variables $x y $y . Asignales los valores 144 y 999 respectiva-
mente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división
y la multiplicación
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $x=144;
        $y=999;
        $suma=0;
        $resta=0;
        $multiplicacion=0;
        $division=0;
        
         $suma = $x + $y;
         $resta = $y - $x;
         $multiplicacion = $x * $y;
         $division = $y / $x;
           
        echo "suma es de $x y $y es igual $suma<br>"; 
        echo "resta es de $x y $y es igual $resta<br>"; 
        echo "multiplicacion es de $x y $y es igual $multiplicacion<br>"; 
        echo "division es de $x y $y es igual $division<br>"; 
        ?>
    </body>
</html>
