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
   $listadoClientes = "SELECT dni, nombre, direccion, telefono FROM cliente";
    $consulta = mysql_query($listadoClientes, $conexion); 
    
    // Si el DNI introducido ya existe en la BBDD, se muestra una ventana indicando el error.
    if (mysql_num_rows($consulta) == 1) {
      echo '<script type="text/javascript">alert("Lo siento, ese DNI ya existe en la base de datos");</script>';
    } else { // Si el DNI no existe, se insertan todos los datos del cliente en la BBDD.
      $inserta = "INSERT INTO cliente VALUES (\"$_POST[dni]\", \"$_POST[nombre]\", \"$_POST[direccion]\", \"$_POST[telefono]\")";
      mysql_query($inserta, $conexion);
    }
  }

   ////elimina la fila cliente sentencia sql
    if($_POST['accion'] == "Eliminar") {
      ?>
      
      
        <form method="post" action="C07ejercicio2.php">
            <p class="bg-danger"><h1>Si se confirma esta acción se perdera la fila con DNI: <?=$_POST[dni]?></h1></p>    
      <input type="submit" class="btn btn-warning" value="Confirmacion" name="eliminardefinitivo"> 
      <input type="submit" class="btn btn-default" value="Cancelar"> 
      <input type='hidden' name='dni' value=<?=$_POST[dni]?>>
        </form>
      <?php 
             
            
  } 
  
  if(ISSET($_POST['eliminardefinitivo'])){
      
      $borra = "DELETE FROM cliente WHERE dni=\"$_POST[dni]\"";
             mysql_query($borra, $conexion);
      
  }
  
  
  if($_POST['accion'] == "Modificar") {
            echo " La fila con DNI: ", $_POST[dni], " es la que se va modificar";
         
           $dni = $_POST['dni'];
            $nombre = $_POST['nombre'];
               $direccion = $_POST['direccion'];
                 $telefono = $_POST['telefono'];
      
      ?>
          <form method="post" action="C07ejercicio2.php">
              <div class="form-group">
                  DNI :<input type="text"  value="<?=$dni?>" name="dnimodificado"><br> 
                  nombre :<input type="text" value="<?=$nombre?>" name="nombre"><br> 
                  direccion :<input type="text" value="<?=$direccion?>" name="direccion"><br>
                   Telefono :<input type="text" value="<?=$telefono?>" name="telefono"><br>
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
  //el isset comprueba que no este vacio antes de agregar y sirve para form de modificar aparezca solo una vez
  if(ISSET($_POST['agregar'])){
        
      $modifica = "UPDATE cliente SET  dni=\"$_POST[dnimodificado]\", nombre=\"$_POST[nombre]\", direccion=\"$_POST[direccion]\", telefono=\"$_POST[telefono]\" WHERE dni=\"$_POST[dni]\"";
        mysql_query($modifica, $conexion);
         
    
   }

   
    // muestra todas las filas de la tabla cliente
    $consulta = mysql_query("SELECT dni, nombre, direccion, telefono FROM cliente limit 0,5", $conexion);
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
            <form method="post" action="C07ejercicio2.php">
            <td><input type="text" name="dni"></td>
            <td><input type="text" name="nombre"></td>
            <td><input type="text" name="direccion"></td>
            <td><input type="text" name="telefono"></td>
            <td><input type="hidden" name="accion" value="Nuevo cliente"></td>
            <td><input type="submit" class="btn btn-success" value="Añadir">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></td>
            </form>
            </tr>';
      
    //paginacion    
    //Limito la busqueda
$TAMANO_PAGINA = 5;

//examino la página a mostrar y el inicio del registro a mostrar
$pagina = $_GET["pagina"];
if (!$pagina) {
    $inicio = 0;
    $pagina=1;
}
else {
    $inicio = ($pagina - 1) * $TAMANO_PAGINA;
}


//miro a ver el número total de campos que hay en la tabla con esa búsqueda
$ssql = "select * from cliente ";
$rs = mysql_query($ssql,$conexion);
//importante utilizar bien la variable de conexion para conectar bine la base de datos
$num_total_registros = mysql_num_rows($rs);
///cuento filas
$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);
//con ceil se evitan los decimales y se hace numero entero

//pongo el número de registros total, el tamaño de página y la página que se muestra
echo "Número de registros encontrados: " . $num_total_registros . "<br>";
echo "Se muestran páginas de " . $TAMANO_PAGINA . " registros cada una<br>";
echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<p>";

//construyo la sentencia SQL
$ssql = "select * from cliente  limit " . $inicio . "," . $TAMANO_PAGINA;
$rs = mysql_query($ssql);
 //muesta en cada pagina el numero maximo de registros por cada hoja
     
      
      //recorre todo el sql mostrando sus datos aparte en cada fila muestra las opciones de de modificar o eliminar
    while ($registro = mysql_fetch_object($rs)){
 
        echo "<tr>";
        echo "<td>".$registro->dni."</td>";
        echo "<td>".$registro->nombre."</td>";
        echo "<td>".$registro->direccion."</td>";
        echo "<td>".$registro->telefono."</td>";
         
        //coje el dni por fila lo envia por campo oculto al accionar el boton eliminar
        echo "<td><form method='post' action='C07ejercicio2.php'> 
        <input type='hidden' name='dni' value='".$registro->dni."'> 
       <input type='hidden' name='accion' value='Eliminar'>
        <input type='submit' class='btn btn-danger' value='eliminar'> <span class='glyphicon glyphicon-erase' aria-hidden='true'></span></input></form></td>";
        
         echo "<td><form method='post' action='C07ejercicio2.php'> 
        <input type='hidden' name='dni' value='".$registro->dni."'> 
        <input type='hidden' name='nombre' value='".$registro->nombre."'>
        <input type='hidden' name='direccion' value='".$registro->direccion."'> 
        <input type='hidden' name='telefono' value='".$registro->telefono."'> 
       <input type='hidden' name='accion' value='Modificar'>
        <input type='submit'  class='btn btn-info' value='Modificar Fila'> <span class='glyphicon glyphicon-wrench' aria-hidden='true'></span></input></form></td>";
        
        echo "</tr>";
     
      }
      
    echo "</table>";



//muestro los distintos índices de las páginas, si es que hay varias páginas
if ($total_paginas > 1){
    for ($i=1;$i<=$total_paginas;$i++){
        if ($pagina == $i) {
            //si muestro el índice de la página actual, no coloco enlace
            echo $pagina . " ";
        } else {
        //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
            echo "<a href='C07ejercicio2.php?pagina=" . $i . "'> " . $i . " </a>";
        
             
                        
        
        }
    }
}

    
  ?>
    <!-- botones de navegacion-->
            <nav>
                <ul class="pager">
                  <li><a href="C07ejercicio2.php?pagina=1">Inicio</a></li>
                 <?php
                 if($i>1){
                 ?>
                  <li><a href="C07ejercicio2.php?pagina=<?=$i-1?>">Ultima</a></li>
                  <?php
                  }
                  ?>
                </ul>
              </nav>    
  
    
  </body>
</html>

