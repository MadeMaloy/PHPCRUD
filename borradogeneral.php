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

      mysqli_query($conexion,"delete from usuarios") or
        die("Problemas en el select:".mysqli_error($conexion));

      echo "Se efectuó el borrado de todos los alumnos.";
      mysqli_close($conexion);
    ?>
  </body>
</html>
 
