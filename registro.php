<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estiloo.css">
</head>   
    <title>Formulario web</title>

<body>

 <section>
  <img src="img/psi.jpg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        
        <form action="php/registro.php" method="POST">
          <h2 class="mt-5 mb-4">Regístrate</h2>
          


        <input type="text"  name="nombres" placeholder="ingrese nombre" ><br>
        <br>
        <input type="text"  name="apellidos" placeholder="ingrese apellidos"><br>
        <br>
        <input type="text"  name="genero" placeholder="ingrese el genero con el cual se indentifica"><br>
        <br>
        <input type="date"  name="nacimiento" placeholder="ingrese su fecha de nacimiento"><br>
        <br>
        <input type="text"  name="usuario" placeholder="ingrese usuario"><br>
        <br>
        <input type="text"  name="clave" placeholder="ingrese password"><br>
        <br>
        <input type="text"  name="correo" placeholder="ingrese correo"><br>
        <br>
        <input type="text"  name="codigo" placeholder="ingrese su codigo postal"><br>
        <br>
        <input type="text"  name="direccion" placeholder="ingrese su direccion"><br>
        <br>
        <input type="text"  name="telefono" placeholder="ingrese su telefono"><br>
        <br>
        
        <br>


          
        <center>  <button type="submit" class="btn btn-primary" name="registro">Registrarse</button></center>
        </form>
      </section>
    
       <center><p class="mt-3">¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p></center>
       </div>
       </div>
      </div>
    
  </body>
</html>
