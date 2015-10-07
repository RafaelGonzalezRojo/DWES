<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que lea una lista de diez números y determine cuántos son positivos,
y cuántos son negativos.


-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        
        $num = $_GET['num'];
        $cont = $_GET['cont'];
        $contpos = $_GET['contpos'];
        $contneg = $_GET['contneg'];
       //comprobacion de entrada de variables
        print_r(get_defined_vars());
        
       if (!isset($_GET['num']) || ($cont < 10) ) {    
            
         
         $cont++;  
        
         
      
                if($num >= 0){
                    
                    
                    $contpos++;
                    
                }else{
                    
                    
                    $contneg++;
                }
                
          if (!isset($_GET['num'])){
              
               $contpos = 0;
                $contneg = 0;
              
              
          }       
                
         
   
        
        echo "       <form action='C04ejercicio13.php'>
                        <fieldset>
                        <legend>Entrada de datos</legend>



                        <b>Programa de numeros positivos y negativos</b><br> 

                       Inserte el numero <input type='number' name='num' min='-9999' max='9999' autofocus=''><br>
                       <input type='hidden' name='contpos' value='$contpos'>
                       <input type='hidden' name='contneg' value='$contneg'>    
                       <input type='hidden' name='cont' value='$cont'>

                   <input type='submit' value='Enviar'>
                        </fieldset>
                        <br>";
        
         

             echo "</form>";  
        
  
      }else{  
           
                
            
                if($num >= 0){
                    
                    
                    $contpos++;
                    
                }else{
                    
                    
                    $contneg++;
                }
          

             echo "el total de numeros positivos es : " , $contpos , "<br>";
              echo "el total de numeros negativos es : " , $contneg , "<br>";
             echo  "ha insetado " , $cont, " numeros <br>" ;
             
      
      } 
     //comprobacionde entradas de variables 
     print_r(get_defined_vars());
     
        ?>
        
        
   
    </body>
</html>
