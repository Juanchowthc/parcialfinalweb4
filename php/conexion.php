<?php
$LOCALHOST = "localhost";
$USERNAME = "root";
$BDPASSWORD = "";
$BDNAME = "parcialfinal";

$conexion = mysqli_connect($LOCALHOST, $USERNAME, $BDPASSWORD, $BDNAME);

if (!$conexion) {
    echo "<script>alert('Error al conectar la BD');</script>";
} else {
    echo "<script>alert('Conectado Exitosamente');</script>";
    echo "<script>setTimeout(function(){document.querySelector('.alert').style.display = 'none';}, 3000);</script>";
}
?>

