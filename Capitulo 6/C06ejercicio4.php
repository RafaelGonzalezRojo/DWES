
<?php
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
con un nombre de usuario y contraseña correctos.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
     
        //establezco cuenta
            $_SESSION['usuario'] = 'rafa';
            $_SESSION['contra'] = 'rafa1985';
         
        //obtengo verificacion del formulario 
            $usuario = $_GET['usuario'];
            $contra = $_GET['contra'];  
       
 
       
       
     if (($_SESSION['usuario'] != $usuario) || ($_SESSION['contra'] != $contra)) {  
 ?>
        
             <form action='C06ejercicio4.php'>
                        <fieldset>
                        <legend>Entrada de datos</legend>

                        <b>Programa usuario y contraseña</b><br> 
                        Inserte su nombre de usuario <input type='text' name='usuario' autofocus=""><br>
                        Inserte su contraseña de usuario <input type='password' name='contra' autofocus=""><br>
                   <input type='submit' value='Enviar'>
                        </fieldset>
                 <br>
                 
                 <?php
                 
                        if(isset($_GET['usuario'])){
                            
                            echo  "error en verificacion de usuario y contraseña";
                        }
                 
                 
                 ?>
                 
                 

             </form>  
     
        
   <?php  
          
      }else{           
                
                    echo "bienvenido al sistema : " , $_SESSION['usuario'] , "<br>";
                 
        }
      
        ?>
    </body>
</html>
