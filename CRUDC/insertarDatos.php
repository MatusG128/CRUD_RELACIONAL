<?php

include "../config/conexion.php";

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$nombreC = $_POST['nombreC'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "INSERT INTO proveedor(nombre, direccion, nombreContacto, telefono, email)
    VALUES ('$nombre','$direccion', '$nombreC', '$telefono', '$email')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/proveedores/index.php");
} else {
    echo "Datos no insertados";
}
