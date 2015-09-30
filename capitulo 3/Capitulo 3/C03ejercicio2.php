<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Rafael Gonzalez Rojo Sarcasticboy
Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
            
        
            <form action="C03ejercicio2.php">
             <fieldset>
             <legend>Entrada de datos</legend>
             
             <b>Programa de Saludos</b><br> 
             
            Inserte su hora en formato digital:  <input type="number" name="hora" min="1" max="24"><br>
        <input type="submit" value="Enviar">
             </fieldset>
             <br>
             
             <fieldset>
               
                    <?php
                   $bandera = 0;  //Se inicializa a cero para cada recarga de la pagina
                    
                    
                   if(($_GET['hora'] >= 6) and ($_GET['hora'] <= 12 )){
                       
                       echo "Buenos dias <br>";
                       $bandera = 1;//controla la activacion y si entra en lo if para el mensaje de "Esperando datos"
                   }
                  
                    if(($_GET['hora'] >= 13) and ($_GET['hora'] <= 20 )){
                       
                       echo "Buenos tardes <br>";
                       $bandera = 1;
                   }
                   
                   if(($_GET['hora'] >= 21) and ($_GET['hora'] <= 24 )){
                       
                       echo "Buenos noches <br>";
                         $bandera = 1;
                   }
                  
                    if(($_GET['hora'] >= 1) and ($_GET['hora'] <= 5 )){
                       
                       echo "Buenos noches <br>";
                         $bandera = 1;
                   }
                   
                   if($bandera == 0){
                       
                       echo "Esperando datos de entrada <br>";
                   }
                   
                    
                     ?>   
            </fieldset>
        </form> 
        
    </body>
</html>
