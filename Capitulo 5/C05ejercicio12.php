<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Realiza un programa que escoja al azar 5 palabras en español del mini-diccionario del ejercicio
anterior. El programa pedirá que el usuario teclee la traducción al inglés de cada una de las palabras
y comprobará si son correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas
y cuántas erróneas.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           

        
             $diccionario = array ( "gato" => "cat" , "perro" => "dog" , "casa" => "house", "guerra" => "war", "muerte" => "dead", "conejo" => "rabbit",
             
            "capaz" =>"able" ,	"sobre" => "about", "encima" => "above" ,"acceptar" => "accept", "accidente" => "accident" , "acompanar" => "accompany",
             
             "accion" => "action" , "actor" => "actor", "en realidad" => "actually" , "anadir" => "add", "direccion" => "address", "objetivo" => "target" );
 
 
if (!isset($_GET['espanol'])) {
   
    echo "Por favor, introduzca la traducción al inglés de las siguientes palabras.<br>";

    // Extrae las palabras españolas
    foreach ($diccionario as $indice => $valor) {
      $palabrasEspanolas[] = $indice;
    }

    // hace que genere las palabras sin repeticion
    $contpalabra = 0;
    do {
      $palabra = $palabrasEspanolas[rand(0, 17)];
      
                //compara la palabra generada con la guardada
            if (!in_array($palabra, $espanol)) {
                    $espanol[] = $palabra;
                    $contpalabra++;
            }
    } while ($contpalabra < 5);

    echo '<form action="C05ejercicio12.php" method="get">';
    echo '<input type="hidden" name="ejercicio" value="12">';
    //hace 5 veces el input o entrada de datos
    for ($cont2 = 0; $cont2 < 5; $cont2++) {
      echo $espanol[$cont2]." ";
      echo '<input type="hidden" name="espanol[',$cont2,']" value="', $espanol[$cont2],'">';
      echo '<input type="text" name="ingles[', $cont2 ,']" ><br>';
    }
    
    echo '<input type="submit" value="Test">';
    echo '</form>';
    
  } else {
      // obtiene lo enviado por el formulario(ingles) mas la cadena de español
    $espanol = $_GET['espanol'];
    $ingles = $_GET['ingles'];
    $aciertos=0;
    $errores=0;
    for ($cont = 0; $cont < 5; $cont++) {
      if ($diccionario[$espanol[$cont]] == $ingles[$cont]) {
       
          echo "las respuesta correcta es: ", $espanol[$cont], ": ",$ingles[$cont] ,"<br>";
                $aciertos++;
          
      } else {
        echo "la  respuesta incorrecta es : ", $espanol[$cont],": ", $ingles[$cont],  "<br>" ;
        echo "la respuesta correcta es <i>".$diccionario[$espanol[$cont]]."</i><br>";
                $errores++;
                
      }

      
    }
     echo "ha tenido un total de ", $aciertos, " aciertos <br>";
      echo "ha tenido un total de ", $errores, " errores<br>";
    
    
  }
