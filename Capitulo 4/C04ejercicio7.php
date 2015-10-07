<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.

-->


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
   <style>
            @import url(http://weloveiconfonts.com/api/?family=entypo);
        @import url(http://fonts.googleapis.com/css?family=Roboto);

        /* zocial */
        [class*="entypo-"]:before {
          font-family: 'entypo', sans-serif;
        }

        *,
        *:before,
        *:after {
          -moz-box-sizing: border-box;
          -webkit-box-sizing: border-box;
          box-sizing: border-box; 
        }


        h2 {
          color:rgba(255,255,255,.8);
          margin-left:12px;
        }

        body {
          background: #272125;
          font-family: 'Roboto', sans-serif;

        }

        form {
          position:relative;
          margin: 50px auto;
          width: 380px;
          height: auto;
        }

        input {
          padding: 16px;
          border-radius:7px;
          border:0px;
          background: rgba(255,255,255,.2);
          display: block;
          margin: 15px;
          width: 300px;  
          color:white;
          font-size:18px;
          height: 54px;
        }

        input:focus {
          outline-color: rgba(0,0,0,0);
          background: rgba(255,255,255,.95);
          color: #e74c3c;
        }

        button {
          float:right;
          height: 121px;
          width: 50px;
          border: 0px;
          background: #e74c3c;
          border-radius:7px;
          padding: 10px;
          color:white;
          font-size:22px;
        }

        .inputUserIcon {
          position:absolute;
          top:68px;
          right: 80px;
          color:white;
        }

        .inputPassIcon {
          position:absolute;
          top:136px;
          right: 80px;
          color:white;
        }

        input::-webkit-input-placeholder {
          color: white;
        }

        input:focus::-webkit-input-placeholder {
          color: #e74c3c;
        }
     </style>
     <script>
                $(".user").focusin(function(){
             $(".inputUserIcon").css("color", "#e74c3c");
           }).focusout(function(){
             $(".inputUserIcon").css("color", "white");
           });

           $(".pass").focusin(function(){
             $(".inputPassIcon").css("color", "#e74c3c");
           }).focusout(function(){
             $(".inputPassIcon").css("color", "white");
           });
     
    </script> 
    
    <body>  
    
        
       
       
        
        
        <?php
        
            if (!isset($_GET['cont'])) {
            $contra = 55555;
            $cont = 4;    
            //la primera vez que se ejecuta se pone una contra por defecto y su contador de intentos a 4
          } else {
            $cont = $_GET['cont'];
            $contra = $_GET['contra'];
            //almacena  los datos de una vez a otra cada vez que  renvia el form
            
          }

          $numoculto = 6969;

          if ($contra == $numoculto) {
            echo "<h2>La caja fuerte se ha abierto.</h2>";
            
          }
          else if ($cont == 0) {
            echo "<h2>Lo siento, has agotado todas tus oportunidades. La caja fuerte permanecerá cerrada.</h2>";
          } else {
            echo "<h2>Te quedan ", $cont, " oportunidades para abrir la caja fuerte  " ,  $_GET['usuario']  , "</h2><br>";
            $cont--;
            echo "<h2><span class='entypo-login'></span> Caja fuerte electronica introduce tu contraseña</h2>";
           
            echo '<form action="C04ejercicio7.php" method="get">';
            
             echo " <button class='submit'><span class='entypo-lock'></span></button>";
            
            echo "<input type='text' class='user' placeholder='nombre de ususario' name='usuario'/>";
            echo "<span class='entypo-user inputUserIcon'></span><br>";
            echo '<input type="password" class="pass" min=0000 max=9999 name="contra" autofocus><br><br>';
            echo "<span class='entypo-key inputPassIcon'></span>";
           echo '<input type="hidden" name="cont" value="', $cont, '">';
           
            echo '</form>';
          }
        
        ?>
        
        
       
        
        
        
        
    </body>
</html>
