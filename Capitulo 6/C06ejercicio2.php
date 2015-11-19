
<?php
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
en el cómputo. Utiliza sesiones.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
  
    
        <?php
     
     

        if(!isset($_SESSION['cont'])) {
            $_SESSION['cont'] = 0;
            $_SESSION['mayor'] = 0;
            
         }


        
        $num = $_GET['num'];
        //controla los numeros positivos;
        if($_GET['num'] >= 0 ){
            
                //mira los impares
                if($_GET['num'] % 2 != 0){  
              $_SESSION['sumaimpar'] = $_SESSION['sumaimpar'] + $num;
              // se suman
               $cont = $_SESSION['cont']++;
               // se cuentan cuantos impares
               
                }else{
                        //se coje el mayor par
                        if($_SESSION['mayor'] < $_GET['num']){
                        $_SESSION['mayor'] = $_GET['num'];
                        //se guarda el mas alto
                        }
                    }
            
        }   
 ?>
        
             <form action='C06ejercicio2.php'>
                        <fieldset>
                        <legend>Entrada de datos</legend>



                        <b>Programa de media de numeros</b><br> 
                        Inserte el numero <input type='number' name='num' min='-9999' max='9999' autofocus=""><br>
                   <input type='submit' value='Enviar'>
                        </fieldset>
                        <br>
    

             </form>  
     
        
   <?php  
   
                //para solo mostrar en el ultimo caso cuando se inserte un numero negativo
            if($_GET['num'] < 0){
                //quita el ultimo numero insertado el negativo para no dar fallos en la media
                
             echo "el total de la suma   de impares es : " , $_SESSION['sumaimpar'] , "<br>";
             echo  "ha insetado  " , $_SESSION['cont'], " numeros impares <br>" ;
            
             $media = $_SESSION['sumaimpar']/$_SESSION['cont'];
             
             echo "su media de impares es: " , $media , "<br>"; 
             
             echo "el mayor par de los numeros es:" ,  $_SESSION['mayor'] , "<br>";
            }
   
        ?>
      
        
        
     
         
         
                 
    </body>
</html>