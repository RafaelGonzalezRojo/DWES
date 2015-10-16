<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
     <style>
    table, td, th {
    border: 3px solid #344534;
    }
    td {
     text-align: center;   
    }
    body {
     color: #FFFF00;   
     background-color: #678700;   
    }
    </style>
    <body>
        <?php
          $n = $_GET['n'];
      $contadorNumeros = $_GET['contadorNumeros'];
      $numeroTexto = $_GET['numeroTexto'];
      $min = 10000;
      $max = 0;
      if (!isset($n)) {
        $contadorNumeros = 0;
        $numeroTexto = "";
      }

      // Muestra los números introducidos
      if ($contadorNumeros == 10) {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros
                                                // espacios de la cadena       
        $numero = explode(" ", $numeroTexto);
        
        
        
        echo "Los números introducidos son: <br>";
        foreach ($numero as $n) {
          
            if( $min > $n){
            
                $min = $n;
           
                }
              if( $max < $n){
            
                $max = $n;
           
                }   
                
            }
   echo "<table style='width:100%; border:1px;'>";         
      
        foreach ($numero as $n) {
          
            if( $min == $n){
            
                echo "<tr><td>minimo: ", $n,"</td></tr>";
           
                }else if( $max == $n){
            
                echo "<tr><td>maximo: ", $n,"</td></tr>";
           
                }else{
                
                echo "<tr><td> ", $n, "</td></tr>";   
                    
                }
                
                
            }    
            
            
          echo "</table>";       
            
      }//cierra el contador de numeros introducidos
      
      // Pide número y añade el actual a la cadena
      if (($contadorNumeros < 10) || (!isset($n))) {
        ?>
        <form action="C05ejercicio2.php" method="get">
          Introduzca un número:
          <input type="number" name ="n" autofocus>
          <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
          <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
          <input type="submit" value="OK">
        </form>
       <?php
      }
      ?>
    </body>
</html>
