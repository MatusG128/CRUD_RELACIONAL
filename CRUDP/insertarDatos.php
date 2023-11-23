<?php

include "../config/conexion.php";

$proveedor = $_POST['proveedorP'];
$stock = $_POST['stockP'];
$nombre = $_POST['nombreP'];
$ingredientes = $_POST['ingredientes'];
$precio = $_POST['precioP'];

$sql = "INSERT INTO productos(idProveedor,idStock,nombreProducto,ingredientes,precio)
    VALUES ('$proveedor','$stock','$nombre','$ingredientes','$precio')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
