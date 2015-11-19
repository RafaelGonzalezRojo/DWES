<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Amplía el programa anterior de tal forma que se pueda ver el detalle de un producto. Para ello, cada
uno de los productos del catálogo deberá tener un botón *Detalle que, al ser accionado, debe llevar
al usuario a la vista de detalle que contendrá una descripción exhaustiva del producto en cuestión.
Se podrán añadir productos al carrito tanto desde la vista de listado como desde la vista de detalle.
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
               "detalle" => "silla hecha de terciopelo y madera de nogal",
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
             <form action='C06ejercicio5.php' method="post">            
                  <input type="hidden" name="codigo" value="<?=$codigo?>">
                  <input type="hidden" name="accion" value="detalle">
                   <input type='submit' value='Detalle'> 
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
  $detalle = $_POST['detalle'];
  // Inicializa el carrito la primera vez
  if (!isset($_SESSION["carrito"])) {// codigos de los productos
    $_SESSION["carrito"] = array ("sillaterciopelo" => 0, "sillacuero" => 0, "sillacomedor" => 0, "silladiseno" => 0);
  }

  if ($accion == "comprar") {
    $_SESSION["carrito"][$codigo]++;

  }
  
   if ($accion == "detalle") {
    $_SESSION["carrito"][$detalle];
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
      <?php
    }
  } //cierra foreach de los productos                   
        ?>
    </body>
</html>
