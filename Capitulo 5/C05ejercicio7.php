<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
si es necesario.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        //primero se genera los aleatorios
        if (!isset($_GET['numeroTexto'])) {    
          for($cont = 0 ; $cont < 20 ; $cont++){
         
             
                $randomarray[] = rand(0,100);
         
         }
        
            $cont2= 1;
    // ordena los saltos cada 10 numeros para merjor visualizacion
           foreach ($randomarray as $n) {
             
                   
                   echo "",$n," ";
                   
                   if(($cont2 % 10) == 0){
                       
                       echo "<br>";
        
                   }
                   
                 $cont2++; 
                    
               }
               
          
         $numeroTexto = implode(" ", $randomarray);
      
         //tranporta el array generado 
         
         
       
       
  ?>
                        <form action="C05ejercicio7.php">
                        <fieldset>
                        <legend>Entrada de datos</legend>



                        <b>Programa de utiliza array para poner en un array pares primeros y impares en otros</b><br> 

                        <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
                        <input type='submit' value='Enviar'>
                        </fieldset>
                        <br>
                         </form>
        
     <?php   
        
       //si esta lleno el input se ejecuta
      }else{
        
              //nunca olvidar declarar la varibles que se envian
       
         $numeroTexto = $_GET['numeroTexto'];
         $randomarray = explode(" ", $numeroTexto);
      
        //lo exporta aki despues del formulario, antes de eso se tiene que meter en otra variable
                
             foreach ($randomarray as $n) {
                 
                 
                 echo " ", $n ," ";
                 //muestra el array random para la pagina de recarga
             }
         
                echo " array sin ordenar por pares y impares <br> ";
         
         
                foreach ($randomarray as $n) {
          
            
                          
                            if(($n % 2)==0){
                                    //se almacenan pares
                              $arraypar[] = $n;
                              
                            }else{

                                //se almacena los impare
                               $arrayimpar[] = $n;

                            }
                
                
                 } 
                    //paso primero los pares a un array que se muestra
                  foreach ($arraypar as $n) {
                      
                      
                      
                      $arraymostrar[]=$n;
                      
                  
                  }
                 
                  
                  
                  
                  //los impares los meto tb en el array que se mostrara
                    foreach ($arrayimpar as $n) {
                      
                      
                      
                      $arraymostrar[]=$n;
                      
                     
                      
                  }
                  
                  
                  
                  
                  
                  //los muestro al final por pantalla
                  foreach ($arraymostrar as $n) {
                      
                      
                      
                      echo " ", $n ," ";
                      
                      
                      
                  }
                  
           
        
      }//cierra el else
      ?>    
    </body>
</html>
