<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que permita ir introduciendo una serie indeterminada de números
mientras su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el
total acumulado, el contador de los números introducidos y la media.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        
        $num = $_GET['num'];
        $suma = $_GET['suma'];
        $cont = $_GET['cont'];
        
   
        
         //la opertacion va  antes porque despues del isset daba una vuelta mas   
         $suma = $suma + $num;  
          
        if (!isset($_GET['num']) || ($suma <= 10000) ) {      
        
            $cont++; 
            
        
        echo "       <form action='C04ejercicio23.php'>
                        <fieldset>
                        <legend>Entrada de datos</legend>



                        <b>Programa de  numeros hasta 10000 y suma</b><br> 

                       Inserte el numero <input type='number' name='num' min='0' max='10001'><br>
                         <input type='hidden' name='suma' value='$suma'>
                         <input type='hidden' name='cont' value='$cont'>

                   <input type='submit' value='Enviar'>
                        </fieldset>
                        <br>";
        
         

             echo "</form>";  
        
  
      }else{  
           
            $media = $suma / $cont;

             echo "el total de la suma es : " , $suma , "<br>";
             echo "la media es: " , $media ,"<br>";
             echo "numeros introducidos: " , $cont ,"<br>";
      
      } 
        ?>
        
        
     
    </body>
</html>
