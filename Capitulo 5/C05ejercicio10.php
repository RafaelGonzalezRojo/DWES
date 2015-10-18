<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos
suman según el juego de la brisca. Emplea un array asociativa para obtener los puntos a partir del
nombre de la figura de la carta. Asegúrate de que no se repite ninguna carta, igual que si las hubieras
cogido de una baraja de verdad.


-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <form action="C05ejercicio10.php" method="get">
            <h1>Este programa de la brisca</h1>
            Pulse a continuacion para jugar:
            
          <input type="hidden" name="numeroTexto" value="activacion">
          <input type="submit" value="Jugar">
        </form>
        
        
        
        
        <?php
        
    
        
     
      
      $numeroTexto = $_GET['numeroTexto'];
      if (isset($numeroTexto)) {
      
      
           
             
          // se declara los array uno asociativo para saber la puntuacion que pertenece a cada figura   
        $puntuacion = array ('as' => 11, 'dos' => 0, 'tres' => 10, 'cuatro' => 0, 'cinco' => 0,
                                'seis' => 0, 'siete' => 0, 'sota' => 2, 'caballo' => 3, 'rey' => 4);
    
        $palo = array ('oro', 'copa', 'basto', 'espada');
    
        $figura = array ('as', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'sota', 'caballo', 'rey');
    
       
      $cartagenerada = "";
      $mano = 0;
      $puntosTotales = 0;
             
             // para jugar contra IA jugador bucleo dos veces        
            for($cont= 0;$cont <= 1;$cont++) {  
                
                 do {
                       
                        $paloCarta = $palo[rand(0, 3)];//genera el palo
                        $figuraCarta = $figura[rand(0, 9)];//genera el numero de de la carta rey o sota o dos 
                        $puntosCarta = $puntuacion[$figuraCarta]; //junta la figura con la asignacion de su puntuacion
                        $carta =  "$figuraCarta de $paloCarta"; //junta  la informacion de dos array en la nombre cara

                            if (!in_array($carta, $cartasguardadas)) { //compara de no repetir las cartas

                                    echo "$carta - $puntosCarta puntos<br>";// muestra las cartas por pantalla
                                    $cartasguardadas[] = $carta;//guarda las cartas para la posterior comparacion 
                                    $mano++;//incrementa hasta llegar al numero cartas que se puede jugar
                                    $puntos= $puntos + $puntosCarta;//suma los puntos para mostrarlos al final de la partida
                                    
                            }
                       
               } while ($mano < 10); //hace el bucle hasta diez cartas

              if($cont == 0){//guardo la puntuacion del primer jugador la primera vez
                  $comparacionpuntos = $puntos;
               echo "<br>La suma total de sus puntos es: ", $puntos, "<br><br>" ; 
              
                    $puntos=0; //esto inicializa de nuevo la puntuacion
                    $mano=0; //esto inicializa la mano para poder hacer de nuevo while
              }else{
                  
               echo "<br>La suma total de los  puntos de la IA es : ", $puntos, "<br><br>" ;   
                  
              }
              
    
            }  
            //comparo las dos puntuaciones para saber quien es el ganador
       
           if($comparacionpuntos>$puntos){
               
               
               echo "Has Ganado Enhorabuena";
               
               
           }else if($comparacionpuntos<$puntos){
               
               
                echo "Has perdido, lo siento la victoria es para IA";
               
           }else{
               
               
               echo "ha sido un empate";
               
               
           }
            

               
               
               
                   
  
      }
     
    
    
    
    
    
    ?>
       
  
    </body>
</html>
