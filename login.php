<!DOCTYPE html>
<html>
<head>
  <title>Página de inicio de sesión</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/estilow.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        
      <form action="php/login.php" method="post">
  <label for="usuario">Usuario:</label>
  <input type="text" name="usuario" id="usuario">
  <label for="clave">Contraseña:</label>
  <input type="password" name="clave" id="clave">
  <button type="submit">Iniciar sesión</button>
</form>

        
        
        <center><p class="mt-3">¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p></center>
      </div>
    </div>
  </div>

  <link rel="stylesheet" type="text/css" href="registro.html">
</body>
</html>
