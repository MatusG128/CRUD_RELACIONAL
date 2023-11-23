<?php

include "../config/conexion.php";

$nombre = $_POST['nombreA'];
$cantidad = $_POST['cantidad'];
$medida = $_POST['medida'];
$minimo = $_POST['minimo'];
$maximo = $_POST['maximo'];

$sql = "INSERT INTO stock(nombreArticulo, cantidad, medida, minimo, maximo)
    VALUES ('$nombre','$cantidad','$medida','$minimo', '$maximo')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/stock/index.php");
} else {
    echo "Datos no insertados";
}
