
<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.

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
           
            
         }


        
        $num = $_GET['num'];
        //controla los numeros positivos;
        if($_GET['num'] >= 0 ){
        $_SESSION['suma'] = $_SESSION['suma'] + $num;
        $cont = $_SESSION['cont']++;
        }   
 ?>
        
             <form action='C06ejercicio1.php'>
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
                $_SESSION['cont']--;
             echo "el total de la suma es : " , $_SESSION['suma'] , "<br>";
             echo  "ha insetado " , $_SESSION['cont'], " numeros <br>" ;
             
             $media = $_SESSION['suma']/$_SESSION['cont'];
             
             echo "su media es: " , $media , "<br>"; 
            }
   
        ?>
      
        
        
     
         
         
                 
    </body>
</html>
