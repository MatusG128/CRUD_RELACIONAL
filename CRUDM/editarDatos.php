<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombreA'];
    $cantidad = $_POST['cantidad'];
    $medida = $_POST['medida'];
    $minimo = $_POST['minimo'];
    $maximo = $_POST['maximo'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE stock SET nombreArticulo= '$nombre', cantidad = '$cantidad',medida = '$medida', minimo='$minimo', maximo='$maximo' WHERE idStock = $id";

    if (mysqli_query($conexion, $consulta)) {
        header("location:../Formularios/stock/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
