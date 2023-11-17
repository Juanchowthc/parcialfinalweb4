<?php
require_once 'php/conexion.php';
$consultadisp= "SELECT ID, NOMBRE, DESCRIPCION, PRECIO, IMAGEN FROM productos where disponibilidad>=1";

$resultado = mysqli_query($conexion,$consultadisp);
if ($resultado) {
    $registros = mysqli_num_rows($resultado);
} else {
    echo "Error: " . mysqli_error($conexion);
}

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MI PAGINA WEB</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="./css/css@3">
    

</head>
<body bgcolor="#cfd6e3">

<div>


        <ul>
            <li><a href="login.php">INICIA SESION</a></li>
            <li><a href="registro.php">REGISTRATE</a></li>        
            
            <li><a href="img/contac.png">CONTACTENOS</a></li>
            <li><a href="img/otto.jpg">ACERCA DE</a></li>

            <left><audio id="audio" autoplay controls loop>
            <source src="audio/ms.mp3" type="audio/mpeg">
        </audio></left>
                   

            
        </ul>
    </div>

    
    
</header>
   
    
        

  </div>


<main>


  <div class="album py-5 bg-body-tertiary">
    <div class="container">
    <div class="row">
  <?php foreach ($resultado as $row) { ?>
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
       <CENTER> <img class="bd-placeholder-img card-img-top" src="<?php echo $row['IMAGEN']; ?>" alt="<?php echo $row['NOMBRE']; ?>" width="30%" height="225">
        <div class="card-body">
          <p class="card-text"><?php echo $row['NOMBRE']; ?></p>
          <p class="card-text"><?php echo $row['DESCRIPCION']; ?></p>
          <p class="card-text"><?php echo $row['PRECIO']; ?></p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location.href='ver.php'">Ver</button>
              <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location.href='compra.php'">Comprar</button></CENTER>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
    </div>
  </div>
</main>

</body>
</html>