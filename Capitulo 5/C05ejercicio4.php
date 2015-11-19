<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>lo ke sea</title>
    </head>
      <style>
    table, td, th {
    border: 5px solid #588834;
    }
    td {
     text-align: center;   
    }
    body {
     color: #FFFFFF;   
     background-color: #872788;   
    }
    </style>
    
    
    
    <body>
        
        
        <?php
         
        
        
     if (!isset($_GET['numeroTexto'])) {    
          for($cont = 0 ; $cont <= 99 ; $cont++){
         
             
                $randomarray[] = rand(0,20);
         
         }
        
            $cont2= 1;
    
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
                        <form action="C05ejercicio4.php">
                        <fieldset>
                        <legend>Entrada de datos</legend>



                        <b>Programa de localizar numero y sustituir</b><br> 

                       Inserte un numero de los mostrados arriba<input type='number' name='rojo' min='0' max='20'><br>
                       Inserte el numero sustituir<input type='number' name='sustituir' min='0' max='20'><br> 
                        <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
                        <input type='submit' value='Enviar'>
                        </fieldset>
                        <br>
                         </form>
        
     <?php   
        
       //si esta lleno el input se ejecuta
      }else{
        
              //nunca olvidar declarar la varibles que se envian
       
         $rojo = $_GET['rojo'];
         $sustituir = $_GET['sustituir'];
         $numeroTexto = $_GET['numeroTexto'];
         $randomarray = explode(" ", $numeroTexto);
      
        //lo exporta aki despues de el formulario antes de eso se tiene que meter en otra variable
           
                foreach ($randomarray as $n) {
                              if(($cont2 % 10) == 0){
                                  
                                  echo "<br>";
                              }
                        
                            if($n == $rojo){
               
                                echo "<span style= color:red; font-weight: italic;\> ", $sustituir , " </span>";


                            }else{


                                echo " ",$n," ";


                            }
                            
                            $cont2++;
                
                 } 
         
         
        
      }//cierra el else
      ?>    
        
        
    </body>
</html>
