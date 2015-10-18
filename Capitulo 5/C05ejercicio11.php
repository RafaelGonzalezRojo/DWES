<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativa para almacenar las parejas de palabras. El programa pedirá una palabra
en español y dará la correspondiente traducción en inglés.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form action="C05ejercicio11.php" method="get">
          Introduzca un palabra en español para traducir:
          <input type="text" name ="palabra" autofocus>
          <input type="hidden" name="palabraTexto" value="<?= $palabraTexto . " " . $palabra ?>">
          <input type="submit" value="OK">
        </form>

        <?php
        
         $palabraTexto = $_GET['palabra'];
  if (isset($palabraTexto)) {
         
         $diccionario = array ("gato" => "cat" , "perro" => "dog" , "casa" => "house", "guerra" => "war", "muerte" => "dead", "conejo" => "rabbit",
             
            "capaz" =>"able" ,	"sobre" => "about", "encima" => "above" ,"acceptar" => "accept", "accidente" => "accident" , "acompanar" => "accompany",
             
             "accion" => "action" , "actor" => "actor", "en realidad" => "actually" , "anadir" => "add", "direccion" => "address", "objetivo" => "target" );
         
         foreach ($diccionario as $espanol => $ingles) {
             
             if($palabraTexto == $espanol){
              echo "" , $espanol, " es ",$ingles,"";
              $encontrada = true;
              
             }
        
         } 
        
         if($encontrada == false){
             
             echo "Lo siento no pude encontrar esa palabra";
             
         }
         
  }   
        ?>
    </body>
</html>
