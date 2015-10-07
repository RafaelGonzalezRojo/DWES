<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que diga si un número introducido por teclado es o no primo. Un
número primo es aquel que sólo es divisible entre él mismo y la unidad.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <?php
       
       
        $num = $_GET['num'];
      
        print_r(get_defined_vars());
   
      
        
        
        
        if (!isset($_GET['num'])) {      
       
  
        echo "       <form action='C04ejercicio16.php'>
                        <fieldset>
                        <legend>Entrada de datos</legend>



                        <b>Programa de  numeros primos o no primos</b><br> 

                       Inserte el numero <input type='number' name='num' min='0' max='10000'><br>
                        
                       
                   <input type='submit' value='Enviar'>
                        </fieldset>
                        <br>";
        
         

             echo "</form>";  
        
  
      }else{
          
            
          for($cont = 2; $cont <= $num; $cont++){
            
              print_r(get_defined_vars());
              
                     if($num % $cont == 0){
                            
                         $cont2++;
                             
                       }
                      
            
             } 
          
      
            if($cont2 != 1){
                 echo "no es primo el numero: " , $num , "<br>";
            }else{
                 echo "es primo el numero " , $num , "<br>";
            }
            
      
      } 
   
        ?>
        
    </body>
</html>
