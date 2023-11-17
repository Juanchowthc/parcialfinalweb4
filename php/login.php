<?php
require 'conexion.php';

$usuario = !empty($_POST['usuario']) ? $_POST['usuario'] : '';
$clave = !empty($_POST['clave']) ? $_POST['clave'] : '';

$consulta = "SELECT * FROM registrados WHERE Usuario = '$usuario'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) == 1) {
  $fila = mysqli_fetch_assoc($resultado);
  if ($clave == $fila['clave']) {    
    session_start();
    $_SESSION['usuario'] = $usuario;
    header('Location: ../index2.php');
    exit;
  } else {   
    echo "Contraseña incorrecta";
  }
} else {  
  echo "Usuario no encontrado";
}

mysqli_close($conexion);
?>
