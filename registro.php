<?php
  //session_start();
  require("conexion.php");
  if (isset($_POST['registrarse'])!="" && $_POST['nombre']!="" && $_POST['email']!="" && $_POST['contrasena']!="" ) {
    $nombre_usuario=$_POST['nombre'];
    $correo_usuario=$_POST['email'];
    $contrasena_usuario=$_POST['contrasena'];

    $sql2="SELECT * FROM usuario WHERE nombre='$nombre_usuario'";
    
    $sql3="SELECT * FROM usuario WHERE correo='$correo_usuario'";
    //$result2=mysqli_query($con,$sql2);
    //$result3=mysqli_query($con,$sql3);

    $contar1=mysqli_num_rows(mysqli_query($con,$sql2));
    $contar2=mysqli_num_rows(mysqli_query($con,$sql3));

    if ($contar1==1) {
      //echo "la direccion de correo ya esta registrada";
      echo '<script language="javascript">alert("la direccion de usuario ya esta registrada");</script>'; 
    
    }
    else if ($contar2==1){
      //echo "Este nombre de usuario ya esta registrado";
      echo '<script language="javascript">alert("Este nombre de correo ya esta registrado");</script>';
    }
    else{
  
      $sql="INSERT INTO usuario(id,nombre,correo,contrasena) VALUES ('','$nombre_usuario','$correo_usuario','$contrasena_usuario')";
      $result=mysqli_query($con,$sql);
      echo '<script language="javascript">alert("Registro satifactorio");</script>';
      //$_SESSION['inicio_session']='dog';
      //header("location:pag_inicio.php");
      }
  }
  //else {
      //echo "Por favor llena todos los campos ";   
      //echo '<script language="javascript">alert("Por favor llena todos los campos");</script>';
 // }


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

      <h1  > REGISTRARSE  </h1>

      </div>
    </section>

    <section id="main">
      <div class="contenedor">
        <article id="main-col">
          
          <form action="registro.php" method="POST">
            
            <br>
            <label for="name">Nombre del Uuario</label>
            <input type="text" name="nombre" placeholder="Ingresa tu nombre">
            <br>
            <label for="correo">Email</label>
            <input type="email" name="email" placeholder="Ingresa tu email">
            <br>
            <label for="contra" >Contraseña</label>
            <input type="password" name="contrasena" placeholder="Ingresa tu contraseña">
            <br>
            
            <button class="boton3" type="submit" name="registrarse" value="Enviar"> Registrarme </button> 
            
          </form>

          <form action="iniciar_sesion.php">
            <button class="boton2" type="submit" name="iniciar" value="iniciar">  Iniciar sesión</button>
          </form>
            
        </article>

        <aside id="lateral">
          <div class="oscuro">
            <h3>¿Que hacemos?</h3>
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
