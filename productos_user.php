<?php
  session_start();
  require ("conexion.php");
  if (!$_SESSION['inicio_session']){
      header("location:iniciar_sesion.php");
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
            <li class="actual"><a href="productos_user.php">Productos</a></li>
            <li ><a href="adquirir_user.php">Adquirir</a></li>
            <li >
              <div>
                <a href="usuario.php"><img class="imag" src="img/logo3.png"></a>
                <p class="texto-imagen">User <p>
              </div>
            </li> 
          </ul>
        </nav>
    </header>
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
      <div class="contenedor">
        <div class="caja">
          <img src="img/laptop6.png">
          <h3>Laptop Asus GL753VE-GC145T Core i7 17.3" 1TB 16GB"</h3>
          <p>S/.5,999.00</p>
        </div>
        <div class="caja">
          <img src="img/laptop7.png">
          <h3>Laptop Asus GL553VE-DM028T Core i7 15.6" 1TB 12GB Video 2GB</h3>
          <p>S/.4,249.15</p>
        </div>
        <div class="caja">
          <img src="img/laptop8.png">
          <h3>Laptop Acer Nitro 5 AN515-51-560L Core i5 15.6" 1TB 12GB</h3>
          <p>S/.2,999.00</p>
        </div>
      </div>
      <div class="contenedor">
        <div class="caja">
          <img src="img/laptop9.png">
          <h3>Laptop Asus GL753VE-GC145T Core i7 17.3" 1TB 16GB"</h3>
          <p>S/.5,999.00</p>
        </div>
        <div class="caja">
          <img src="img/laptop10.png">
          <h3>Laptop Asus GL553VE-DM028T Core i7 15.6" 1TB 12GB Video 2GB</h3>
          <p>S/.4,249.15</p>
        </div>
        <div class="caja">
          <img src="img/laptop11.png">
          <h3>Laptop Acer Nitro 5 AN515-51-560L Core i5 15.6" 1TB 12GB</h3>
          <p>S/.2,999.00</p>
        </div>
      </div>
      <div class="contenedor">
        <div class="caja">
          <img src="img/laptop12.png">
          <h3>Laptop Asus GL753VE-GC145T Core i7 17.3" 1TB 16GB"</h3>
          <p>S/.5,999.00</p>
        </div>
        <div class="caja">
          <img src="img/laptop13.png">
          <h3>Laptop Asus GL553VE-DM028T Core i7 15.6" 1TB 12GB Video 2GB</h3>
          <p>S/.4,249.15</p>
        </div>
        <div class="caja">
          <img src="img/laptop14.png">
          <h3>Laptop Acer Nitro 5 AN515-51-560L Core i5 15.6" 1TB 12GB</h3>
          <p>S/.2,999.00</p>
        </div>
      </div>
    </section>

    <footer>
      <p>Graphel Desarrollo Web, Copyright &copy; 2017</p>
    </footer>
  </body>
</html>
