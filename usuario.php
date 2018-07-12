<?php
  session_start();
  require ("conexion.php");
  if (!$_SESSION['inicio_session']){
      header("location:iniciar_sesion.php");
  }
  if (isset($_POST['cerrar_s'])){

          session_destroy();
          header("location:pag_inicio.php");
  }


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Venta de laptops">
    <title>Tienda de Laptops Garage | Inicio </title>
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
            <li ><a href="pag_inicio_user.php">Inicio</a></li>
            <li><a href="productos_user.php">Productos</a></li>
            <li><a href="adquirir_user.php">Adquirir</a></li>
            
            <!--<li><a href="iniciar_sesion.php">Login</a></li>-->
            <!--<li><a href="usuario.php"><img class="imag" src="img/logo2.png"></a></li> -->
            <li >
              <div>
                <a class="actual" href="usuario.php"><img class="imag" src="img/logo.png"></a>
                <p class="texto-imagen">User <p>
              </div>
            </li> 
          </ul>
        </nav>
      </div>
    </header>

    <section id="boletin">
      <div class="contenedor">
        <h1><center>Adquiere nuestros productos aqui ;)</center> </h1>
        <form action="usuario.php" method="post">
          <button type="submit" name="cerrar_s" class="boton1">Cerrar Sesion</button>
        </form>
      </div>
    </section>

    <section id="main">
      <div class="contenedor">
        <article id="main-col">
          <h1>Lista de Productos Adquiridos</h1>
          <ul id="productos">
            <li>
              <h3>Informacion del usuario</h3>
              <p></p>
              <p>Compras realizadas</p>
            </li>
            <li>
              <h3>Archivo de compras</h3>
              <p</p>
              <p>Precio desde: $1000000</p>
            </li>
          </ul>
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
