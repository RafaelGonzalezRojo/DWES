<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax 2 + bx + c = 0).
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        
       
        
        
         <form action="C03ejercicio9.php">
             <fieldset>
             <legend>Entrada de datos</legend>
             
             
             
             <b>Programa de ordenacion de numeros</b><br> 
             
            Inserte el variable  a <input type="number" name="a" min="-9999" max="9999"><br>
             Inserte el variable b   <input type="number" name="b" min="-9999" max="9999"><br> 
             Inserte el variable c  <input type="number" name="c" min="-9999" max="9999"><br>
             
        <input type="submit" value="Enviar">
             </fieldset>
             <br>
             
             <fieldset>
        <?php
                     
   
   
                $a = $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];

                
             
                
              if (($a == 0) and ($b == 0) and ($c == 0)) {
                  
                  echo  "Si las ejecutado la pagina php no hagas caso al segundo mensaje se inicializa a 0 todos los valores la primera vez.<br>";
                  echo  "la ecuacion tiene muchas soluciones";
              }  

            if (($a == 0) and ($b == 0) and ($c != 0)) {
                echo  "La ecuación no tiene solución.";
                 }

          
          

          if (($a != 0) and ($b != 0) and ($c == 0)) {
            echo  "x1 = 0 <br>";
            echo  "x2 = ", (-$b / $a) , "<br>";
          }


          

          if (($a == 0) and ($b != 0) and ($c != 0)) {
                  echo  "x1 = x2 = ", (-$c / $b) , "<br>";
          }

          
         

          if (($a != 0) and ($b != 0) and ($c != 0)) {  

            $discriminador = ($b * $b) - (4 * $a * $c);
                // si la operacion sale negativa
            
            if ($discriminador < 0) {
              echo  "La ecuación no tiene soluciones reales";
              
              // si la operacion sale  positiva
            } else {
                
                echo  "x1 = ", (-$b + sqrt($discriminador)) / (4 * $a * $c) , "<br>";
                
                echo  "x2 = ", (-$b - sqrt($discriminador)) / (4 * $a * $c) , "<br>";
            }
          }
                        
       
       
       
       
          
                
              
                
        
        ?>
                 </fieldset>
            </form>
                     
                 
    </body>
</html>
