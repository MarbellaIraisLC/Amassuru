<?php
$mysqli->real_query("SELECT * FROM `Directorio` WHERE correo='carolina.nietog@gmail.com'");
$resultado = $mysqli->use_result();

echo "Orden del conjunto de resultados...\n";
while ($fila = $resultado->fetch_assoc()) {
    echo " id = " . $fila['id'] . "\n";
}
?>