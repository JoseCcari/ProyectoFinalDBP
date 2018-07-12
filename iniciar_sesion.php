<?php
  session_start();
  require("conexion.php");
  if (isset($_POST['iniciar']) !=""){
    if($_POST['email']!=""  && $_POST['contrasena']!=""){
      $mail1=$_POST['email'];
      $pass1=$_POST['contrasena'];
     
      $consultax="SELECT nombre FROM usuario WHERE correo='$mail1' AND contrasena='$pass1'";
      $resultado1=mysqli_query($con,$consultax);
      $row=mysqli_fetch_row($resultado1);
      $countx=mysqli_num_rows($resultado1); 

      //echo '<script language="javascript">alert("'.$row[0].'");</script>';

      if( $countx==1 ){
        $_SESSION['inicio_session']= '$consultax';
        //echo '<script language="javascript">alert("asdasdasd ");</script>';
        header("location:pag_inicio_user.php");
      }
      else{
          echo '<script language="javascript">alert("Contraseña o correo incorrectos :c ");</script>';
      }

    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width">
    <meta name="description" content="Venta de laptops">
    <title>Tienda de Laptops Garage| Contacto</title>
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    <header>
      <img src="img/logo_porta.png" class="imagen">
      <div class="contenedor">
        <div id="marca">
          <h1><span class="resaltado">Garage</span> Laptops de la mejor Calidad</h1>
        </div>
        <nav>
          <ul>
            <li><a href="pag_inicio.php">Inicio</a></li>
            <li><a href="nosotros.html">Nosotros</a></li>
            <li><a href="productos.html">Productos</a></li>
             <li class="actual"><a href="iniciar_sesion.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="boletin">
      <div class="contenedor">
        <h1><center> Regístrate e ingresa a un Nuevo Mundo</center> </h1>
        <form action="registro.php">
          <button type="submit" class="boton1">  Registrate </button>
        </form>
      </div>
    </section>

    <section id="main">
      <div class="contenedor">
        <article id="main-col">
          
          <form action="iniciar_sesion.php" method="post">
            <h1 ><center> Iniciar Sesión</center>  </h1>
            <br>
            <label for="correo">Email</label>
            <input type="email" name="email" placeholder="Ingresa tu email">
            <br>
            <label for="contra" >Contraseña</label>
            <input type="password" name="contrasena" placeholder="Ingresa tu contraseña">
            <br>
            <button class="boton2" type="submit" name="iniciar" value="Enviar">  Iniciar sesión</button> 
             
          </form >


          <form action="registro.php" method="post">
              <button  class="boton3" type="submit" name="registrarse" value="Enviar">  Registrarse </button>
          </form>
        </article>

        <aside id="lateral">
          <div class="oscuro">
            <h3>Que hacemos</h3>
            <p>Con la última tecnología disponible, vendedores idóneos en el tema, y técnicos con altos conocimientos, Garage SRL, ocupa un lugar privilegiado entre las empresas informáticas, debido a su alto grado de compromiso con el cliente, quien siempre busca lo mejor para sí.</p>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>Graphel Desarrollo Web, Copyright &copy; 2017</p>
    </footer>
  </body>
</html>
