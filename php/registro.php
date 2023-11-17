<?php
require 'conexion.php';

$nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
$genero = isset($_POST['genero']) ? $_POST['genero'] : '';
$nacimiento = isset($_POST['nacimiento']) ? $_POST['nacimiento'] : '';
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$clave = isset($_POST['clave']) ? $_POST['clave'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';


$insertar = "INSERT INTO registrados (Nombres, Apellidos, Genero, nacimiento, Usuario, Clave, Correo, Codigo, Direccion, Telefono) VALUES ('$nombres', '$apellidos', '$genero', '$nacimiento', '$usuario', '$clave', '$correo', '$codigo', '$direccion', '$telefono')";

$resultado = mysqli_query($conexion, $insertar);

if ($resultado) {
    echo "¡Se insertaron los datos correctamente!";
} else {
    echo "¡No se puede insertar la informacion!"."<br>";
    echo "Error: " . $insertar . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
