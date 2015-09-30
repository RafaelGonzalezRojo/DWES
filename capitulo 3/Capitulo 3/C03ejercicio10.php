<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Rafael Gonzalez Rojo Sarcasticboy
Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form action="C03ejercicio10.php">
            <fieldset>
                <legend>Entrada de datos</legend>

                <b>Programa de Horoscopo</b><br> 

               Inserte su dia de nacimiento:  <input type="number" name="dia" min="1" max="31"><br>
                 seleccione su mes de nacimiento:<select name="mes">
                                                                       <option value="enero">Enero</option>
                                                                       <option value="febrero">Febrero</option>
                                                                       <option value="marzo">Marzo</option> 
                                                                       <option value="abril">Abril</option> 
                                                                       <option value="mayo">Mayo</option>
                                                                       <option value="junio">Junio</option> 
                                                                       <option value="julio">Julio</option> 
                                                                       <option value="agosto">Agosto</option> 
                                                                       <option value="septiembre">Septiembre</option>
                                                                       <option value="octubre">Octubre</option>
                                                                       <option value="noviembre">Noviembre</option> 
                                                                       <option value="diciembre">Diciembre</option> 
                                                                      
                                               </select> <br>
                <input type="submit" value="Enviar">
               </fieldset>
               <br> <!-- espacio entre el formulario de entrada de datos y script php-->

            <fieldset>
               
                    <?php
                   $bandera = 0;  //Se inicializa a cero para cada recarga de la pagina
                    
                    
                   if((($_GET['dia'] >= 21) and ($_GET['mes'] == "marzo" )) || (($_GET['dia'] <= 20) and ($_GET['mes'] == "abril" ))){
                       
                       echo "<img src='aries.jpg' align=middle>  Eres Aries <br><br>    <p> Un Aries es una persona llena de energía y entusiasmo. Pionero y aventurero, le encantan los retos, la libertad y las nuevas ideas."
                       . " A los Aries les gusta liderar y prefieren dar instrucciones a recibirlas. </p>";
                       $bandera = 1;//controla la activacion y si entra en los if para el mensaje de "Esperando datos"
                   }
                  
                    if((($_GET['dia'] >= 21) and ($_GET['mes'] == "abril" )) || (($_GET['dia'] <= 21) and ($_GET['mes'] == "mayo" ))){
                       
                       echo "<img src='tauro.jpg' align=middle> eres Tauro <p>Un Tauro suele ser práctico, decidido y tener una gran fuerza de voluntad. Los Tauro son personas estables y conservadores, seguirán de forma leal un líder en el que tienen confianza. Les encanta la paz y tranquilidad y son muy respetuosos con las leyes y las reglas. Respetan los valores materiales y evitan las deudas. "
                        . "Son un poco reacios al cambio. </p><br>";
                       $bandera = 1;
                   }
                   
                   if((($_GET['dia'] >= 22) and ($_GET['mes'] == "mayo" )) || (($_GET['dia'] <= 21) and ($_GET['mes'] == "junio" ))){
                       
                       echo "<img src='geminis.jpg' align=middle>  eres Géminis <br> <p> Géminis es el signo de los gemelos y, como tal, su carácter es doble, bastante complejo y contradictorio. Por un lado es versátil, pero por el otro puede ser insincero. Suelen tener elegancia y caer en los errores de los jóvenes. Tienen la felicidad, "
                       . "el egocentrismo, la imaginación y la inquietud de los niños.</p>";
                         $bandera = 1;
                   }
                  
                    if((($_GET['dia'] >= 22) and ($_GET['mes'] == "junio" )) || (($_GET['dia'] <= 22) and ($_GET['mes'] == "julio" ))){
                       
                       echo "<img src='cancer.jpg' align=middle> eres Cancer <br> <p> El carácter de un Cáncer es el menos claro de todos los signos del zodiaco. Un Cáncer puede ser desde tímido y aburrido hasta brillante y famoso. "
                        . "Los Cáncer son conservadores y les encanta la seguridad y el calor de su hogar. </p>";
                         $bandera = 1;
                   }
                   
                   
                    if((($_GET['dia'] >= 23) and ($_GET['mes'] == "julio" )) || (($_GET['dia'] <= 23) and ($_GET['mes'] == "agosto" ))){
                       
                       echo "<img src='leo.jpg' align=middle> eres Leo <br> <p> Un Leo es el signo más dominante del zodiaco. También es creativo y extrovertido. Son los reyes entre los humanos, de la misma forma que los leones son los reyes en el reino animal."
                        . " Tienen ambición, fuerza, valentía, independencia y total seguridad en sus capacidades.</p><br>";
                         $bandera = 1;
                   }
                   
                   
                    if((($_GET['dia'] >= 24) and ($_GET['mes'] == "agosto" )) || (($_GET['dia'] <= 23) and ($_GET['mes'] == "septiembre" ))){
                       
                       echo "<img src='virgo.jpg' align=middle> eres Virgo <br> <p> Virgo, el único signo representado por una mujer, es un signo caracterizado por su precisión, su convencionalidad, su actitud reservada y su afán, a veces hasta obsesión, con la limpieza. Los Virgo suelen ser observadores y pacientes."
                        . " Pueden parecer a veces fríos, de hecho les cuesta hacer grandes amigos.</p> <br>";
                         $bandera = 1;
                   }
                   
                   
                    if((($_GET['dia'] >= 24) and ($_GET['mes'] == "septiembre" )) || (($_GET['dia'] <= 23) and ($_GET['mes'] == "octubre" ))){
                       
                       echo "<img src='libra.jpg' align=middle> eres Libra <br> <p> Los Libra se encuentran entre los signos más civilizados del zodiaco. Tienen encanto, elegancia y buen gusto, son amables y pacíficos. Les gusta la belleza y la armonía y son capaces de ser imparciales ante conflictos. "
                        . "No obstante, una vez que han llegado a una opinión sobre algo, no les gusta que se les contradiga.</p>";
                         $bandera = 1;
                   }
                   
                    if((($_GET['dia'] >= 24) and ($_GET['mes'] == "octubre" )) || (($_GET['dia'] <= 22) and ($_GET['mes'] == "noviembre" ))){
                       
                       echo "<img src='escorpion.jpg' align=middle> eres Escorpión <br> <p>El Escorpio es un signo intenso con una energía emocional única en todo el zodiaco. Aunque puedan aparecer tranquilos, los Escorpio tienen una agresión y magnetismo interno escondidos dentro. "
                        . "Son afables, buenos tertulianos, reservados y cortés, pero aunque parezcan estar algo retirados del centro de actividad, en realidad están observando todo con su ojo crítico. </p>";
                         $bandera = 1;
                   }
                   
                   
                     if((($_GET['dia'] >= 23) and ($_GET['mes'] == "noviembre" )) || (($_GET['dia'] <= 21) and ($_GET['mes'] == "diciembre" ))){
                       
                       echo "<img src='sagitario.jpg' align=middle> eres Sagitario <br> <p>El Sagitario es uno de los signos más positivos del zodiaco. Son versátiles y les encanta la aventura y lo desconocido. "
                         . "Tienen la mente abierta a nuevas ideas y experiencias y mantienen una actitud optimista incluso cuando las cosas se les ponen difíciles. </p>";
                         $bandera = 1;
                   }        
                   
                    if((($_GET['dia'] >= 22) and ($_GET['mes'] == "diciembre" )) || (($_GET['dia'] <= 20) and ($_GET['mes'] == "enero" ))){
                       
                       echo "<img src='capri.jpg' align=middle> eres Capricornio <br> <p>
                    Un Capricornio es un de los signos del zodiaco más estables, seguros y tranquilos. Son trabajadores, responsables, prácticos y dispuestos a persistir hasta sea necesario para conseguir su objetivo"
                    . "Son fiables y muchas veces tienen el papel de terminar un proyecto iniciado por uno de los signos más pioneros. </p>";
                         $bandera = 1;
                   } 
                   
                   
                     if((($_GET['dia'] >= 21) and ($_GET['mes'] == "enero" )) || (($_GET['dia'] <= 18) and ($_GET['mes'] == "febrero" ))){
                       
                       echo "<img src='acuario.jpg' align=middle> eres Acuario <br> <p>Los Acuario tienen una personalidad fuerte y atractiva. Hay dos tipos de Acuario: uno es tímido, sensible, y paciente. "
                         . "El otro tipo es exuberante, vivo y puede llegar a esconder las profundidades de su personalidad debajo de un aire frívolo. Ambos tipos de Acuario tienen una fuerza de convicción y de la verdad muy fuerte y son tan honestos que saben cambiar sus opiniones si aparecen pruebas que muestran lo contrario de lo que pensaban antes. </p>";
                         $bandera = 1;
                    }    
                   
                    
                     if((($_GET['dia'] >= 19) and ($_GET['mes'] == "febrero" )) || (($_GET['dia'] <= 20) and ($_GET['mes'] == "marzo" ))){
                       
                       echo "<img src='pisci.jpg' align=middle> eres Piscis <br> <p> Un Piscis tiene una personalidad tranquila, paciente y amable. Son sensibles a los sentimientos de los demás y responden con simpatía y tacto al sufrimiento de los demás. Son muy queridos por los demás porque tienen un carácter afable, cariñoso y amable, y no suponen una amenaza para los que quieren tener puestos de autoridad o mayor popularidad."
                         . " Suelen asumir su entorno y sus circunstancias y no suelen tomar la iniciativa para resolver problemas. </p>";
                         $bandera = 1;
                    }
                    
                   if($bandera == 0){
                       
                       echo "Esperando datos de entrada <br>";
                   }
                   
                    
                     ?>   
            </fieldset>
        </form> 
    </body>
</html>
