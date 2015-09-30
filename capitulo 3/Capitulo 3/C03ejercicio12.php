<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Rafael Gonzalez Rojo Sarcasticboy
Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en
el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación
obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan
de conocimientos en las diferentes asignaturas del curso.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="C03ejercicio12.php" method="post">
             <fieldset>
             <legend>Entrada de datos</legend>
             
             <b>Programa de Saludos</b><br> 
             
            Puede una variable cambiar su valor <br>
            <input type="radio" name="puntua" value="0" checked>No, una vez asignado no cambia.<br>
            <input type="radio" name="puntua" value="1" checked>Si , cambia en el momento que se opera con el<br><br>
            
              
            el html y el php son compatibles para un navegador web <br>
            <input type="radio" name="puntua2" value="0" checked>No, sus codigos no pueden estar nunca dentro de la misma pagina<br>
            <input type="radio" name="puntua2" value="1" checked>Si , son totalmente compatibles<br><br>
            
              
             $cont que quiere decir? <br>
            <input type="radio" name="puntua3" value="0" checked>Que es un contable con dinero<br>
            <input type="radio" name="puntua3" value="0" checked> Que  alguien esta contando dolares<br>
             <input type="radio" name="puntua3" value="1" checked> Es una variable de php<br><br>
            
              
            Los navegadores son:<br>
            <input type="radio" name="puntua4" value="1" checked>ambas<br>
            <input type="radio" name="puntua4" value="0" checked>Un  programa que viene para conectarte a la red.<br>
            <input type="radio" name="puntua4" value="0" checked>Un  programa que lee el codigo web y lo interpreta<br><br>
            
            
             Un codigo puede ser nocivo para tu pc o linux <br>
            <input type="radio" name="puntua5" value="1" checked>Si, es llamado malware<br>
            <input type="radio" name="puntua5" value="0" checked>No, es totalmente inocuo para tu maquina sea cual sea.<br><br>
            
              
            Java es un lenguaje orientado a objetos<br>
            <input type="radio" name="puntua6" value="1" checked>Si<br>
            <input type="radio" name="puntua6" value="0" checked>No , depende de como lo utilizes<br><br>
            
              
              Las bases de datos como pueden ser<br>
            <input type="radio" name="puntua7" value="0" checked>relacionales<br>
            <input type="radio" name="puntua7" value="0" checked> relacionales, orientadas a objetos<br>
             <input type="radio" name="puntua7" value="1" checked> relacionales, orientadas a objetos y hibridas<br><br>
            
              
            El diseño de una web que numero maximo de colores debes utilizar<br>
            <input type="radio" name="puntua8" value="0" checked>uno<br>
            <input type="radio" name="puntua8" value="0" checked>dos<br>
            <input type="radio" name="puntua8" value="1" checked>tres<br><br>
            
            como podrias obtener mas "colores" de una web sin pasarte del limite de colores maximo<br>
            <input type="radio" name="puntua9" value="0" checked>metiendo colores terciarios<br>
            <input type="radio" name="puntua9" value="1" checked>utilizando saturacion, tono o luminisidad<br>
             <input type="radio" name="puntua9" value="0" checked> utilizando saturacion, tono , luminisidad y contraste<br><br>
            
              
            Como se llama la nueva mascota del ies campanillas <br>
            <input type="radio" name="puntua10" value="1" checked>Java<br>
            <input type="radio" name="puntua10" value="0" checked>Curro<br>
            <input type="radio" name="puntua10" value="0" checked>Perrita pancha<br><br>
            
            
            Atencion !! si le das borraras todo tu test:<input type="reset" value="Borrar todo"/><br>
            <input type="submit" value="Enviar">
             </fieldset>
             <br>
             
             <fieldset>
               
                    <?php
                   $bandera = 0;  //Se inicializa a cero para cada recarga de la pagina
                    
                    
                   if($_POST['puntua'] == 1){
                       $puntuacion = $puntuacion + 1;
                       
                       $bandera = 1;//controla la activacion y si entra en lo if para el mensaje de "Esperando datos"
                   }
                  
                   if($_POST['puntua2'] == 1){
                       $puntuacion = $puntuacion + 1;
                   
                       $bandera = 1;//controla la activacion y si entra en lo if para el mensaje de "Esperando datos"
                   }
                   
                    if($_POST['puntua3'] == 1){
                       $puntuacion = $puntuacion + 1;
                      
                       $bandera = 1;//controla la activacion y si entra en lo if para el mensaje de "Esperando datos"
                   }
                   
                   if($_POST['puntua4'] == 1){
                       $puntuacion = $puntuacion + 1;
                      
                       $bandera = 1;//controla la activacion y si entra en lo if para el mensaje de "Esperando datos"
                   }
                  
                   if($_POST['puntua5'] == 1){
                       $puntuacion = $puntuacion + 1;
                    
                       $bandera = 1;//controla la activacion y si entra en lo if para el mensaje de "Esperando datos"
                   }
                   
                    if($_POST['puntua6'] == 1){
                       $puntuacion = $puntuacion + 1;
                      
                       $bandera = 1;//controla la activacion y si entra en lo if para el mensaje de "Esperando datos"
                   }
                   
                       if($_POST['puntua7'] == 1){
                       $puntuacion = $puntuacion + 1;
                     
                       $bandera = 1;//controla la activacion y si entra en lo if para el mensaje de "Esperando datos"
                   }
                  
                   if($_POST['puntua8'] == 1){
                       $puntuacion = $puntuacion + 1;
                      
                       $bandera = 1;//controla la activacion y si entra en lo if para el mensaje de "Esperando datos"
                   }
                   
                    if($_POST['puntua9'] == 1){
                       $puntuacion = $puntuacion + 1;
                       
                       $bandera = 1;//controla la activacion y si entra en lo if para el mensaje de "Esperando datos"
                   }
                   
                      if($_POST['puntua10'] == 1){
                       $puntuacion = $puntuacion + 1;
                      
                       $bandera = 1;//controla la activacion y si entra en lo if para el mensaje de "Esperando datos"
                   }  
                       
                    if($bandera == 1){
                       echo "tu puntuacion es: " , $puntuacion , "<br>";
                       
                   }
                   
                   
                   
                   
                   if($bandera == 0){
                       
                       echo "Esperando datos de entrada <br>";
                   }
                   
                    
                     ?>   
            </fieldset>
        </form> 
    </body>
</html>
