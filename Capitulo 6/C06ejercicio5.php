<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Crea una tienda on-line sencilla con un catálogo de productos y un carrito de la compra. Un
catálogo de cuatro o cinco productos será suficiente. De cada producto se debe conocer al menos
la descripción y el precio. Todos los productos deben tener una imagen que los identifique. Al lado
de cada producto del catálogo deberá aparecer un botón Comprar que permita añadirlo al carrito.
Si el usuario hace clic en el botón Comprar de un producto que ya estaba en el carrito, se deberá
incrementar el número de unidades de dicho producto. Para cada producto que aparece en el carrito,
habrá un botón Eliminar por si el usuario se arrepiente y quiere quitar un producto concreto del
carrito de la compra. A continuación se muestra una captura de pantalla de una posible solución.


-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
          //array con productos en su interior
            $producto= array(
            //el primer entre comillado es su codigo  
           "sillaterciopelo" =>  array("nombre" => "Silla de terciopelo",
              "imagen" => "terciopelo.jpeg",
              "precio" => 120),
              
             "sillacuero" => array("nombre" => "Silla de cuero",
              "imagen" => "cuero.jpg",
              "precio" => 150), 
              
              
             "sillacomedor" =>  array("nombre" => "Silla de comedor",
              "imagen" => "comedor.jpeg",
              "precio" => 60),
              
              
                  
              "silladiseno" => array("nombre" => "Silla de diseño",
              "imagen" => "moderna.jpeg",
              "precio" => 130),    
          );        
            
          
        foreach($producto as $codigo => $n ){
            echo "Descripcion: " ,$n["nombre"]," Precio: ",$n["precio"],  "€<br>";
            ?>
            <img src=<?=$n['imagen']?> height="150" width="100"><br>
             <form action='C06ejercicio5.php' method="post">            
                  <input type="hidden" name="codigo" value="<?=$codigo?>">
                  <input type="hidden" name="accion" value="comprar">
                   <input type='submit' value='Comprar'> 
             </form>
            <br>
            <br>
            <?php
          }
          ?>
       			
  <h3>Carrito</h3><hr>

  <?php // Carrito ///////////////////////////////////////////////////////
  $accion = $_POST['accion'];
  $codigo = $_POST['codigo'];

  // Inicializa el carrito la primera vez
  if (!isset($_SESSION["carrito"])) {// codigos de los productos
    $_SESSION["carrito"] = array ("sillaterciopelo" => 0, "sillacuero" => 0, "sillacomedor" => 0, "silladiseno" => 0);
  }

  if ($accion == "comprar") {
    $_SESSION["carrito"][$codigo]++;

  }

  if ($accion == "eliminar") {
    $_SESSION["carrito"][$codigo]--;
    //elimina de en uno en uno el producto selecionado
    //  $_SESSION["carrito"][$codigo] = 0;
    //la expresion comentada anteriormente elimina todo el el producto del carrito
  }

 // Muestra el contenido del carrito
  $total = 0;
  

  foreach ($producto as $cod => $n) {
     
      //cuenta para la suma total de los productos
    if ($_SESSION["carrito"][$cod] > 0) {
        // el if para que añada los productos si es superior 0
      $total = $total + ($_SESSION["carrito"][$cod] * $n["precio"]);
      ?>
      <img src="<?=$n["imagen"]?>" width="100"><br>
      <?=$n["nombre"]?><br>Precio: <?=$n["precio"]?> €<br>
      Unidades: <?=$_SESSION["carrito"][$cod]?>
      <form action="C06ejercicio5.php" method="post">
        <input type="hidden" name="codigo" value="<?=$cod?>">
        <input type="hidden" name="accion" value="eliminar">
        <input type="submit" value="Eliminar">
      </form><br><br>
      
      <hr></hr>
     
      <?php
      
    }
  } //cierra foreach de los productos  
     ?>
  <hr></hr>
  <h3>Total</h3> 
  <p><?=$total?> €</p> 
    </body>
</html>
