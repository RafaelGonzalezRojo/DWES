<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Ejercicio 6
Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
pares de un color y los impares de otro.



-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
              <?php
          $n = $_GET['n'];
      $contadorNumeros = $_GET['contadorNumeros'];
      $numeroTexto = $_GET['numeroTexto'];
     
      if (!isset($n)) {
        $contadorNumeros = 0;
        $numeroTexto = "";
      }

      // Muestra los números introducidos
      if ($contadorNumeros == 8) {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros
                                                // espacios de la cadena       
        $numero = explode(" ", $numeroTexto);
        
        
              
      
        echo "en rojo los pares y en azul los pares";
        echo "Los números introducidos son: <br>";
        foreach ($numero as $n) {
          
            if(($n % 2)==0){
                        //pares
                   echo "<span style='color:red'> ", $n," </span>";
                }else{
                    
                    //se muestra los impare
                    echo "<span style='color:blue'> ", $n," </span>";
                    
                }
                 
                
            }
         
            
      }//cierra el contador de numeros introducidos
     
      // Pide número y añade el actual a la cadena
      if (($contadorNumeros < 8) || (!isset($n))) {
        ?>
        <form action="C05ejercicio6.php" method="get">
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
