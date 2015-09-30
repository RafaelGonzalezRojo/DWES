<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Escribe un programa que ordene tres números enteros introducidos por teclado.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
         <form action="C03ejercicio13.php">
             <fieldset>
             <legend>Entrada de datos</legend>
             
             <b>Programa de ordenacion de numeros</b><br> 
             
            Inserte el primer numero   <input type="number" name="num1" min="1" max="9999"><br>
             Inserte el segundo numero   <input type="number" name="num2" min="1" max="9999"><br> 
             Inserte el tercer numero   <input type="number" name="num3" min="1" max="9999"><br>
             
        <input type="submit" value="Enviar">
             </fieldset>
             <br>
             
             <fieldset>
               
                    <?php
                   $bandera = 0;  //Se inicializa a cero para cada recarga de la pagina
                   // compara esa igualdad entre los numeros.
                   if(($_GET['num1'])==($_GET['num2']) || ($_GET['num2'])==($_GET['num1']) and ($_GET['num2']>= 1) and ($_GET['num3']>= 1)and ($_GET['num1']>= 1)){
                       $bandera = 1;
                        echo "el numero primer numero", $_GET['num1'] , "<br>";
                        echo "el numero segundo numero", $_GET['num2'] , "<br>";
                        echo "el numero tercer numero", $_GET['num3'] , "<br>";
                   } 
                       
                    if(($_GET['num1'])==($_GET['num3']) || ($_GET['num3'])==($_GET['num1'])and ($_GET['num2']>= 1) and ($_GET['num3']>= 1)and ($_GET['num1']>= 1) ){
                        $bandera = 1;
                        echo "el numero primer numero", $_GET['num1'] , "<br>";
                        echo "el numero segundo numero", $_GET['num3'] , "<br>";
                        echo "el numero tercer numero", $_GET['num2'] , "<br>";
                   }
                   
                   
                    if(($_GET['num3'])==($_GET['num2']) || ($_GET['num2'])==($_GET['num3'])and ($_GET['num2']>= 1) and ($_GET['num3']>= 1)and ($_GET['num1']>= 1) ){
                       $bandera = 1;
                        echo "el numero primer numero", $_GET['num3'] , "<br>";
                        echo "el numero segundo numero", $_GET['num2'] , "<br>";
                        echo "el numero tercer numero", $_GET['num1'] , "<br>";
                   }
                   
                   
                    // hace las comparaciones este bloque del numero uno introducido y a partir de este los demas numeros
                   if((($_GET['num1']) > ($_GET['num2']) and (($_GET['num1']) > ($_GET['num3'])))){
                      
                      $bandera = 1;
                      echo "el numero primer numero", $_GET['num1'] , "<br>";
                      
                      if($_GET['num2']>$_GET['num3'] ){
                       
                      echo "el numero segundo numero ", $_GET['num2'], "<br>";
                      echo "el numero tercer numero ", $_GET['num3'], "<br>";    
                      }else{
                      
                      echo "el numero segundo numero ", $_GET['num3'], "<br>";
                      echo "el numero tercer numero ", $_GET['num2'], "<br>";  
                          
                      }
                      
                   }
                  
                     // hace las comparaciones este bloque del numero dos introducido y a partir de este los demas numeros  
                    if((($_GET['num2']) > ($_GET['num1']) and (($_GET['num2']) > ($_GET['num3'])))){
                      
                      $bandera = 1;
                      echo "el numero primer numero ", $_GET['num2'], "<br>";
                      
                      if($_GET['num1']>$_GET['num3'] ){
                       
                      echo "el numero segundo numero ", $_GET['num1'], "<br>";
                      echo "el numero tercer numero ", $_GET['num3'], "<br>";    
                      }else{
                      
                      echo "el numero segundo numero ", $_GET['num3'], "<br>";
                      echo "el numero tercer numero ", $_GET['num1'], "<br>";  
                          
                      }
                      
                   }
               
                     // hace las comparaciones este bloque del numero tres o tercer numero introducido y a partir de este los demas numeros  
                    
                    
                   if((($_GET['num3']) > ($_GET['num1']) and (($_GET['num3']) > ($_GET['num2'])))){
                      
                      $bandera = 1;
                      echo "el numero primer numero ", $_GET['num3'], "<br>";
                
                      
                      
                      if($_GET['num1']>$_GET['num2'] ){
                       
                      echo "el numero segundo numero ", $_GET['num1'], "<br>";
                      echo "el numero tercer numero ", $_GET['num2'], "<br>";    
                      }else{
                      
                      echo "el numero segundo numero ", $_GET['num2'], "<br>";
                      echo "el numero tercer numero ", $_GET['num1'], "<br>";  
                          
                      }
                      
                   }
                        
                   //compara la igualdad de los tres numeros.
                   if(($_GET['num1'] == $_GET['num2']) and ($_GET['num1'] == $_GET['num3']) and ($_GET['num2'] == $_GET['num3']) and ($_GET['num2']>= 1) and ($_GET['num3']>= 1)and ($_GET['num1']>= 1)) {
                        $bandera=1;
                     
                        echo "los tres numeros son iguales";
                       
                    }
                    
                   if($bandera == 0){
                       
                       echo "Esperando datos de entrada <br>";
                    
                   }
                     
                  
                    
                     ?>   
            </fieldset>
        </form> 
        
        
        
    </body>
</html>
