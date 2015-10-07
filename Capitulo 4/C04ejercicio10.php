<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo.
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
        
   
       if (!isset($_GET['num']) || ($num > 0) ) {    
            
         $suma = $suma + $num;  
         $cont++;  
            
        
        
       
        
        
        echo "       <form action='C04ejercicio10.php'>
                        <fieldset>
                        <legend>Entrada de datos</legend>



                        <b>Programa de media de numeros</b><br> 

                       Inserte el numero <input type='number' name='num' min='-9999' max='9999'><br>
                         <input type='hidden' name='suma' value='$suma'>
                       <input type='hidden' name='cont' value='$cont'>

                   <input type='submit' value='Enviar'>
                        </fieldset>
                        <br>";
        
         

             echo "</form>";  
        
  
      }else{  
           
            

             echo "el total de la suma es : " , $suma , "<br>";
             echo  "ha insetado " , $cont, " numeros <br>" ;
             
             $media = $suma /($cont - 1);
             
             echo "su media es: " , $media , "<br>" ; 
             

            
        




        
      
      } 
        ?>
      
        
        
     
         
         
                 
    </body>
</html>
