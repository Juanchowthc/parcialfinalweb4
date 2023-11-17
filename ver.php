<?php

require 'php/conexion.php';


$consulta = "SELECT * FROM productos";


$resultado = mysqli_query($conexion, $consulta);


if (mysqli_num_rows($resultado) > 0) {
    
    echo "<table>";
    echo "<tr><th>ID</th><th>NOMBRE</th><th>DESCRIPCION</th><th>PRECIO</th><th>disponibilidad</th><th>IMAGEN</th>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['ID'] . "</td>";
        echo "<td>" . $fila['NOMBRE'] . "</td>";
        echo "<td>" . $fila['DESCRIPCION'] . "</td>";
        echo "<td>" . $fila['PRECIO'] . "</td>";
        echo "<td>" . $fila['disponibilidad'] . "</td>";
        echo "<td>" . $fila['IMAGEN'] . "</td>";
      
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}


mysqli_free_result($resultado);
mysqli_close($conexion);

?>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #4CAF50;
  color: white;
}
</style>