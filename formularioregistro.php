
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container-fluid">
      <!-- Action es a que pagina se iran los datos  -->
      <!-- si los datos son requeridos hay que escribir required -->
      <form method="post" action="guardadatos.php">
        <label>Ingrese su Nombre</label><br>
        <input type="text" name="nombre" required><br>
        <label>Ingrese apellido</label><br>
        <input type="text" name="apellido" required><br>
        <label>numero de cedula</label><br>
        <input type="text" name="cedula" required><br>
        <label>Ingrese su email</label><br>
        <input type="text" name="mail" required><br>
        <label>genero</label><br>
        <!-- Radio Button para que no escriban cualquier tontera
        si tiene el mismo name "gen" solo se selecciona uno. No todo -->
        <input type="radio" name="gen" value="femenino"><label> femenino</label>
        <input type="radio" name="gen" value="masculino"><label>masculino</label>
        <input type="radio" name="gen" value="other"><label> otro </label>
        <!-- Boton Guardar -->
        <input type="submit" name="" value="Guardar">
        <input type="reset" name="" value="Limpiar">
      </form>
    </div>
    <a href="index.php">volver</a>
  </body>
</html>
