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

      $registros=mysqli_query($conexion, "select cedula from usuarios
                            where cedula='$_POST[borrardato]'") or
      die("Problemas en el select:".mysqli_error($conexion));
      if ($reg=mysqli_fetch_array($registros))
      {
      mysqli_query($conexion,"delete from usuarios where cedula='$_POST[borrardato]'") or
        die("Problemas en el select:".mysqli_error($conexion));
      echo "Se efectuó el borrado del alumno con dicho mail.";
      }
      else
      {
      echo "No existe un alumno con ese mail.";
      }
      mysqli_close($conexion);
    ?>
  </body>
</html>
