<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $conexion=mysqli_connect("localhost","root","","sabados") or
          die("Problemas con la conexión");

      $registros=mysqli_query($conexion,"select * from usuarios") or
        die("Problemas en el select:".mysqli_error($conexion));

      while ($reg=mysqli_fetch_array($registros))
      {
        echo "El Nombre:".$reg['nombre']."<br>";
        echo "El Apellido:".$reg['apellido']."<br>";
        echo "La Cedula:".$reg['cedula']."<br>";
        echo "El Mail:".$reg['mail']."<br>";
        echo "El Genero".$reg['genero']."<br>";

      }
      mysqli_close($conexion);
    ?>
    <a href="index.php">volver</a>
  </body>
</html>
