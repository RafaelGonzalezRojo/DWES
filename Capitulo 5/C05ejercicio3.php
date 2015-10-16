<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
     <style>
    table, td, th {
    border: 4px solid #348834;
    }
    td {
     text-align: center;   
    }
    body {
     color: #FFFFFF;   
     background-color: #674788;   
    }
    </style>
    
    <body>
        <?php
       $n = $_GET['n'];
      $contadorNumeros = $_GET['contadorNumeros'];
      $numeroTexto = $_GET['numeroTexto'];
      $aux=0;
      $copiaarray = array();
      if (!isset($n)) {
        $contadorNumeros = 0;
        $numeroTexto = "";
      }

      // Muestra los números introducidos
      if ($contadorNumeros == 15) {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros
                                                // espacios de la cadena       
        $numero = explode(" ", $numeroTexto);
        $aux = $numero[14];
       //almacena una posicion
         $copiaarray[0] = $aux;
        // almacena en posicion 0 la posicion 14 de array original ej pos 14= 2 Array1 ---> pos 0= 2 como el ultimo array esta vacion no sufre machacado de array.  
        echo "Los números introducidos son: <br>";
        //mueve las posiciones rotando a la derecha -->
         
        for ($cont = 0 ; $cont <= 13; $cont++ ) {
          
           
            $copiaarray[$cont + 1] = $numero[$cont]; 
            //empiezo en la posicion 1 a meter todos los numeros originales//
                
            }
            
        
      //sustitulle la posicion
     
        //muestran los arrais// 
        echo "numeros originales: </br>";
   
        foreach ($numero as $n) {
          
            
       echo " ",$n,"";
                
                
            }    
            
         echo " <br> numeros rotados: </br>";
       
        foreach ($copiaarray as $n) {
          
            
       echo " ",$n," ";
                
                
            }    
            
    //acaba de mostrar los arrais
             
            
      }//cierra el contador de numeros introducidos
      
      // Pide número y añade el actual a la cadena
      if (($contadorNumeros < 15) || (!isset($n))) {
        ?>
        <form action="C05ejercicio3.php" method="get">
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
