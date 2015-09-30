<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    $espacio=10;
    $marca=12;
   for($cont2=1; $cont2<=5; $cont2++){
        
       
       for($cont4=1; $cont4<$espacio; $cont4++){
              
                echo "&nbsp";
              
         }    
       
        for($cont=13; $cont>$marca; $cont--){
            
                
                  
                  echo "*";
           
          }
          
      echo "<br>";
     $marca = $marca-2; 
     $espacion++;
   }
        ?>
    </body>
</html>
