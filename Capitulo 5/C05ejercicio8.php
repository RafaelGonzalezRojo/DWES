<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
     

Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una
tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto
de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar
el array resultante.
Por ejemplo:

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
    table, td, th {
    border: 4px solid #367834;
    }
    td {
     text-align: center;   
    }
    body {
     color: #FFFFFF;   
     background-color: #675688;   
    }
    </style>
        
        
        
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
      if ($contadorNumeros == 10) {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros
                                                // espacios de la cadena       
        $numero = explode(" ", $numeroTexto);
        
     echo "Los números introducidos son: <br>";    
   echo "<table style='width:100%; border:1px;'>";  
        
        foreach ($numero as $n) {
          
             echo "<td> ", $n,"</td>";
            
            }
            
          echo "<br><tr>";  
            
         for($cont = 0 ; $cont <= 9; $cont++) {
             
             echo "<td style='color:#FFFF20;'> ", $cont , "</td>";
         }  
          echo "</tr>";
      echo "</table>";           
            //paso cada numero
          foreach ($numero as $n) {
          
                            //el numero se comprueba si se puede dividir por sus anteriores
              
                $cont2 = 0;// se inicializa cada vez que el numero a comprobar es distinto
                    
                    for($cont=2;$cont<=$n;$cont++){

                           if($n % $cont == 0){
                                   //se cuenta 
                            $cont2++;

                           } 

                    }
                        
                       
                    // si el cont es distinto a una vez se considera que no es primo se controla mediante $con2
                    if($cont2 != 1){
                           //no es primo se almacena aki  
                        $arraynoprimo[]= $n;
                        
                    }else{
                        
                        //el primo se almacena aki
                        $arrayprimo[] = $n;
                        
                    }
                         
                
             } 
                    //paso primero los pares a un array que se muestra
                foreach ($arrayprimo as $n) {


                    $arraymostrar[] = $n;


                }




                //los impares los meto tb en el array que se mostrara
                  foreach ($arraynoprimo as $n) {


                    $arraymostrar[] = $n;



                }



       echo "Los números ordenados primero primos y despues no-primos son: <br>";    
       echo "<table style='width:100%; border:1px;'>";     

                //los muestro al final por pantalla
                foreach ($arraymostrar as $n) {



                    echo "<td> ", $n,"</td>";



                }

        echo "<br><tr>";  

               for($cont = 0 ; $cont <= 9; $cont++) {

                   echo "<td style='color:#FF00FF;'> ", $cont , "</td>";
               } 


        echo "</tr>";
       echo "</table>";       

      
      
      
      
      
            
      }//cierra el contador de numeros introducidos
      
      // Pide número y añade el actual a la cadena
      if (($contadorNumeros < 10) || (!isset($n))) {
        ?>
        <form action="C05ejercicio8.php" method="get">
            <h1>Este programa pide 9 numeros pero se introducen 1 a 1</h1>
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
