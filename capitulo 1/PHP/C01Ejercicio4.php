<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP
para familiarizarte con éste último.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio4</title>
         <style>
                td {
                    width:20%;
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
              <td><b>Lunes</b></td>
              <td><b>Martes</b></td>
              <td><b>Miercoles</b></td>
              <td><b>Jueves</b></td>
              <td><b>Viernes</b></td>
            </tr>
            <tr>
              <td>DWES</td>
              <td>Programacion</td>
               <td>DEWS</td>
                <td>Programacion</td>
              <td>Base de datos</td>
             
            </tr>
            <tr>
              <td>DWES</td>
              <td>Programacion</td>
              <td>DEWS</td>
               <td>Programacion</td>
              <td>Base de datos</td>
             
            </tr>
            <tr>
              <td>DWES</td>
              <td>Programacion</td>
              <td>DEWS</td>
               <td>Programacion</td>
              <td>Base de datos</td>
             
            </tr>
            <tr>
              <td>Recreo</td>
              <td>Recreo</td>
              <td>Recreo</td>
              <td>Recreo</td>
              <td>Recreo</td>
            </tr>
            

            <tr>
              <td>Programacion</td>
              <td>Base de Datos</td>
              <td>HLC</td>
              <td>EINEM</td>
              <td>DIW</td>
            </tr>
           
             <tr>
              <td>DIW</td>
              <td>Base de Datos</td>
              <td>HLC</td>
              <td>EINEM</td>
              <td>DWES</td>
            </tr>
            
              <tr>
              <td>DIW</td>
              <td>Base de Datos</td>
              <td>HLC</td>
              <td>EINEM</td>
              <td>DWES</td>
            </tr>
           
            
          </table> "
        ?>
        
    </body>
</html>
