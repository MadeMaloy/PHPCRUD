 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $conexion=mysqli_connect("localhost","root","","sabados") or
            die("Problemas con la conexión");

        $registros=mysqli_query($conexion,"select *
                                from usuarios where cedula='$_POST[datoBuscar]'") or
          die("Problemas en el select:".mysqli_error($conexion));

        if ($reg=mysqli_fetch_array($registros))
        {
          echo "El Nombre:".$reg['nombre']."<br>";
          echo "El Apellido:".$reg['apellido']."<br>";
          echo "La Cedula:".$reg['cedula']."<br>";
          echo "El Mail:".$reg['mail']."<br>";
          echo "El Genero:".$reg['genero']."<br>";
        }
        else
        {
          echo "No existe un alumno con ese mail.";
        }
        mysqli_close($conexion);
    ?>
    <a href="index.php">volver</a>
  </body>
</html>
    
