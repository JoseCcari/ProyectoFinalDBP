<?php
  //session_start();
  //require ("conexion.php");
  //if (!$_SESSION['inicio_session']){
  //    header("location:iniciar_sesion.php");
  //}

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
            <li class="actual"><a href="pag_inicio.php">Inicio</a></li>
            <li><a href="nosotros.html">Nosotros</a></li>
            <li><a href="productos.html">Productos</a></li>
            <li><a href="iniciar_sesion.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="cabecera">
      <div class="contenedor">
        <h1>Lo mejor y último en Laptops de la mejor Calidad </h1>
        <p>
        Desde Laptops para escritorio hasta Laptops Gamers lo último en tecnología</p>
        <p>Todo lo que buscas en un solo lugar.</p>
      </div>
    </section>

    <section id="boletin">
      <div class="contenedor">
        <h1><center>Regístrate e ingresa a un Nuevo Mundo</center> </h1>
        <form action="iniciar_sesion.php" >
          <button type="submit" class="boton1">Regístrate</button>
        </form>
      </div>
    </section>

    <section id="cajas">
      <div class="contenedor">
        <div class="caja">
          <img src="img/laptop5.png">
          <h3>Laptop Asus GL753VE-GC145T Core i7 17.3" 1TB 16GB"</h3>
          <p>S/.5,999.00</p>
        </div>
        <div class="caja">
          <img src="img/laptop2.png">
          <h3>Laptop Asus GL553VE-DM028T Core i7 15.6" 1TB 12GB Video 2GB</h3>
          <p>S/.4,249.15</p>
        </div>
        <div class="caja">
          <img src="img/laptop3.png">
          <h3>Laptop Acer Nitro 5 AN515-51-560L Core i5 15.6" 1TB 12GB</h3>
          <p>S/.2,999.00</p>
        </div>
      </div>
    </section>

    <footer>
      <p>Tiendas Garage, Copyright &copy; 2018</p>
    </footer>
  </body>
</html>
