<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $proveedor = $_POST['proveedorU'];
    $stock = $_POST['stockU'];
    $nombre = $_POST['nombreU'];
    $ingredientes = $_POST['ingredientes'];
    $precio = $_POST['precioU'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE productos SET idProveedor = '$proveedor',idStock = '$stock',nombreProducto = '$nombre',ingredientes = '$ingredientes', precio = '$precio' WHERE idProducto = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
