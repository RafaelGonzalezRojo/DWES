
<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
el contador de los números introducidos y la media. Utiliza sesiones.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <?php
     
     
        $num = $_GET['num'];
          
         if(!isset($_SESSION['cont'])) {
            $_SESSION['cont'] = -1;
         }
 
        
        //controla los numeros positivos;
     
        if($_GET['num'] >= 0 ){
         
           //se cuentan
                //mira los suma que no supere mas 10000.
                if($_SESSION['suma']< 10000){  
                        $_SESSION['suma'] = $_SESSION['suma'] + $num;
                        // se suman
                         $cont = $_SESSION['cont']++;
                }
        
        }    
     if ($_SESSION['suma'] < 10000) {  
 ?>
        
             <form action='C06ejercicio3.php'>
                        <fieldset>
                        <legend>Entrada de datos</legend>



                        <b>Programa de suma de numeros hasta 10000</b><br> 
                        Inserte el numero <input type='number' name='num' min='-9999' max='9999' autofocus=""><br>
                   <input type='submit' value='Enviar'>
                        </fieldset>
                        <br>
    

             </form>  
     
        
   <?php  
          
      }else{
//para cuando supere la suma los 10000
            if($_SESSION['suma'] >= 10000){
                
                        if($_SESSION['suma'] > 10000){
                            
                            $_SESSION['suma'] = $_SESSION['suma'] - $_GET['num'];
                            
                            $_SESSION['cont']--;
                        }
                
                    echo "el total de la suma de los numeros es : " , $_SESSION['suma'] , "<br>";
                    echo  "ha insetado numeros antes de los 10000:  " , $_SESSION['cont'], " numeros<br>" ;
                    echo "la media es: " , $_SESSION['suma'] / $_SESSION['cont'] , " <br>";
            }
      }  
        ?>
    </body>
</html>
