<?php
  session_start();
  require ("conexion.php");
  if (!$_SESSION['inicio_session']){
      header("location:iniciar_sesion.php");
  }
  /*else{
    $base=mysqli_select_db('login',$con);
    if (!$base) {

      echo 'no se encontro la base de datos' .mysqli_error();
    }*/
    else{
      $sql="SELECT * FROM listalaptops";
      $ejecuta_sentencia=mysqli_query($con,$sql);
      if (!$ejecuta_sentencia) {

        echo'hay un error en la sentencia sql: '.$sql;
       }
       else{
        $lista_laptops=mysqli_fetch_array($ejecuta_sentencia);
       }
    //}
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
            <li ><a href="productos_user.php">Productos</a></li>
            <li class="actual"><a href="adquirir_user.php">Adquirir</a></li>
            <li>
              <div>
                <a href="usuario.php"><img class="imag" src="img/logo3.png"></a>
                <p class="texto-imagen">User <p>
              </div>
            </li> 
          </ul>
        </nav>
      </div>
    </header>
    <section id="main">
      <div class="contenedor">
        <article id="main-col">
          <h1>Lista de Productos</h1>
          <ul id="productos">
            <table>
              <tr>
                <th> Marca </th>
                <th> Modelo </th>
                <th> Precio </th>
                <th> Stock</th>
                <?php
                  for($i=0;$i<$lista_laptops;$i++){
                    echo"<tr>";
                      echo "<td>";
                        echo $lista_laptops['marca'];
                      echo "</td>";
                      echo "<td>";
                        echo $lista_laptops['modelo'];
                      echo "</td>";
                      echo "<td>";
                        echo $lista_laptops['precio'];
                      echo "</td>";
                      echo "<td>";
                        echo $lista_laptops['stock'];
                      echo "</td>";
                    echo"</tr>";
                    $lista_laptops=mysqli_fetch_array($ejecuta_sentencia);
                  }

                ?>
              </tr>

            </table>
            
          </ul>
        </article>

      </div>
    </section>

    <footer>
      <p>Tiendas Graph, Copyright &copy; 2018</p>
    </footer>
  </body>
</html>
