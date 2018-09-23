<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /*
      - defino una variable $conexion
      ----- (le entrego a la variable todo esto) ------
      - Servidor al cual me conecto "localhost"
      - Usuario "root"
      - Contraseña " " (Vacia)
      - Nombre de la base de datos "base1"
      */
      $conexion=mysqli_connect("localhost","root","","sabados") or die("Problemas con la conexión");

      mysqli_query($conexion,"insert into usuarios(nombre,apellido,cedula,mail,genero) values
      ('$_POST[nombre]','$_POST[apellido]','$_POST[cedula]','$_POST[mail]','$_POST[gen]')")
      or die("Problemas en el select".mysqli_error($conexion));

      mysqli_close($conexion);
      echo "El alumno fue dado de alta.";
    ?>
  </body>
</html>
