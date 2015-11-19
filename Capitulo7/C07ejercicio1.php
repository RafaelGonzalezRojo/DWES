<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
  </head>
  
  <body>
    <h2>
      Base de datos <u>banco</u><br>
      Tabla <u>cliente</u><br>
    </h2>
    <?php
    
    //conexion hacia la base de datos
      $conexion = mysql_connect("localhost", "root", "root");
      mysql_select_db("banco", $conexion);
      mysql_set_charset('utf8');
    ////añade cliente  sql
    if($_POST['accion'] == "Nuevo cliente") {
    $inserta = "INSERT INTO cliente VALUES (\"$_POST[dni]\", \"$_POST[nombre]\", \"$_POST[direccion]\", \"$_POST[telefono]\")";
    mysql_query($inserta, $conexion);
  }
   ////elimina la fila cliente sentencia sql
    if($_POST['accion'] == "Eliminar") {
    $borra = "DELETE FROM cliente WHERE dni=\"$_POST[dni]\"";
    mysql_query($borra, $conexion);
  } 
  
  if($_POST['accion'] == "Modificar") {
            echo " La fila con DNI: ", $_POST[dni], " es la que se va modificar";
          ?> 
          <form method="post" action="C07ejercicio1.php">
              <div class="form-group">
                  DNI :<input type="text" name="dnimodificado"><br> 
                  nombre :<input type="text" name="nombre"><br> 
                  direccion :<input type="text" name="direccion"><br>
                   Telefono :<input type="text" name="telefono"><br>
                   <?php

                  echo  "<input type='hidden' name='dni' value='".$_POST[dni]."'>"; 
                   //envia el dni para que pueda insetar los input puesto de este formulario en la secuencia sql
                   ?>
                  <input type="submit" class="btn btn-warning" value="Modificar" name="agregar">
                   <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> 
                   </input>
              </div>
          </form> 
     <?php
  }
  //el isse comprueba que no este vacio antes de agregar y sirve para form de modificar aparezca solo una vez
  if(ISSET($_POST['agregar'])){
        
      $modifica = "UPDATE cliente SET  dni=\"$_POST[dnimodificado]\", nombre=\"$_POST[nombre]\", direccion=\"$_POST[direccion]\", telefono=\"$_POST[telefono]\" WHERE dni=\"$_POST[dni]\"";
        mysql_query($modifica, $conexion);
         
    
   }


    // muestra todas las filas de la tabla cliente
    $consulta = mysql_query("SELECT dni, nombre, direccion, telefono FROM cliente", $conexion);
     echo "<table class='table table-striped'>"; 
     //tabla de diseño para pagina web
      echo "   <tr class='info'>     
    <td><b>DNI</b></td>
    <td><b>Nombre</b></td>
    <td><b>Dirección</b></td>
    <td><b>Teléfono</b></td>
     </tr>";
      //añadir alta de cliente de banco formulario incrustado
      echo '
          <tr>
            <form method="post" action="C07ejercicio1.php">
            <td><input type="text" name="dni"></td>
            <td><input type="text" name="nombre"></td>
            <td><input type="text" name="direccion"></td>
            <td><input type="text" name="telefono"></td>
            <td><input type="hidden" name="accion" value="Nuevo cliente"></td>
            <td><input type="submit" class="btn btn-success" value="Añadir">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></td>
            </form>
            </tr>';
      //recorre todo el sql mostrando sus datos aparte en cada fila muestra las opciones de de modificar o eliminar
    while ($registro = mysql_fetch_array($consulta)){
 
        echo "<tr>";
        echo "<td>".$registro[dni]."</td>";
        echo "<td>".$registro[nombre]."</td>";
        echo "<td>".$registro[direccion]."</td>";
        echo "<td>".$registro[telefono]."</td>";
         
        //coje el dni por fila lo envia por campo oculto al accionar el boton eliminar
        echo "<td><form method='post' action='C07ejercicio1.php'> 
        <input type='hidden' name='dni' value='".$registro[dni]."'> 
       <input type='hidden' name='accion' value='Eliminar'>
        <input type='submit' class='btn btn-danger' value='eliminar'> <span class='glyphicon glyphicon-erase' aria-hidden='true'></span></input></form></td>";
        
         echo "<td><form method='post' action='C07ejercicio1.php'> 
        <input type='hidden' name='dni' value='".$registro[dni]."'> 
       <input type='hidden' name='accion' value='Modificar'>
        <input type='submit'  class='btn btn-info' value='Modificar Fila'> <span class='glyphicon glyphicon-wrench' aria-hidden='true'></span></input></form></td>";
        
        echo "</tr>";
       
      }
      
    echo "</table>";
  ?>
    
    
    
    
  </body>
</html>
