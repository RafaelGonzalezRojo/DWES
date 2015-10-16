<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
del diagrama se pueden dibujar a base de la concatenación de una imagen.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
     <?php
            $n= $_GET['n'];
        $contadorNumeros = $_GET['contadorNumeros'];
        $numeroTexto = $_GET['numeroTexto'];

        if (!isset($n)) {
          $contadorNumeros = 0;
          $numeroTexto = "";
        }

      // Muestra los números introducidos
      if ($contadorNumeros == 12) {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros
                                                // espacios de la cadena       
        $numero = explode(" ", $numeroTexto);
        
      }//cierra el contador de numeros introducidos
      //tambien se puede anotar el array de esta manera
     // $arraymes = ["Enero, Febrero, Diciembe"];
        $arraymes[0]= "Enero";
        $arraymes[1]= "Febrero";
        $arraymes[2]= "Marzo";
        $arraymes[3]= "Abril";
        $arraymes[4]= "Mayo";
        $arraymes[5]= "Junio";
        $arraymes[6]= "Julio";
        $arraymes[7]= "Agosto";
        $arraymes[8]= "Septiembre";
        $arraymes[9]= "Octubre";
        $arraymes[10]= "Nobiembre";
        $arraymes[11]= "Diciembre";
        
        
      if($numero[11] > 0){  
        
      for($contmes = 0; $contmes <= 11; $contmes++){  
         
            echo " ", $arraymes[$contmes] ," hace ", $numero[$contmes] ," grados ºC <br>";

              $cont=1;
              while($cont <= $numero[$contmes]){


                  ?>

                <img src="color_rojo.jpg" WIDTH=12 HEIGHT=15>

                  <?php


                  $cont++;
              }
      
           echo "<br> ";
      }
     }  
      // Pide número y añade el actual a la cadena
      if (($contadorNumeros < 12) || (!isset($n))) {
        ?>
        <form action="C05ejercicio5.php" method="get">
          Introduzca un temperatura(12 meses):
          <input type="number" name ="n" min="0" max="50" autofocus>
          <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
          <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
          <input type="submit" value="OK">
        </form>
       <?php
      }
      
   
        
        
        
        
     ?>   
        
       
        
        
    
        
    </body>
</html>
