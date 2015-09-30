<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio3Cap1</title>
        <style>
                td {
                    width:30%;
                    border-color: #984367;
                    border-style: solid;
                    border-width: 5px;
                    text-align: center;
                }
                tr  {

                    font-family:courier;
                    font-size:110%;
                    border-style: solid;
                    border-width: 5px;
                    text-align: center;
                }
    </style>
    </head>
    <body>
        <?php
    echo "<table style='width:100%;'>
            <tr>
              <td>Español</td>
              <td>Ingles</td>
            </tr>
            <tr>
              <td>Dog</td>
              <td>Perro</td>
            </tr>
            <tr>
              <td>Cat</td>
              <td>gato</td>
            </tr> 
            <tr>
              <td>Bird</td>
              <td>pajaro</td>
            </tr>
            <tr>
              <td>Fish</td>
              <td>pescado</td>
            </tr>  
             <tr>
              <td>Octopus</td>
              <td>Pulpo</td>
            </tr>
            <tr>
              <td>Bee</td>
              <td>abeja</td>
            </tr> 
            <tr>
              <td>Eagle</td>
              <td>Aguila</td>
            </tr>
                <tr>
              <td>Spider</td>
              <td>Araña</td>
            </tr>&
            <tr>
              <td>Cow</td>
              <td>Vaca</td>
            </tr> 
            <tr>
              <td>Bull</td>
              <td>Toro</td>
            </tr>
            <tr>
              <td>Snake</td>
              <td>Serpiente</td>
            </tr>
            
          </table> "
        ?>
    </body>
</html>
