<?php
require_once "../config/conexion3.php";

$nombre_producto = $_POST['ubi'];
$descripcion = $_POST['descrip'];
$precio = $_POST['cost'];

$consulta = $sql->prepare("INSERT INTO t_inmu (ubi_pro, descripcion, costo) VALUES (:ubi, :descrip, :cost)");
$consulta->bindParam(':ubi', $nombre_producto);
$consulta->bindParam(':descrip', $descripcion);
$consulta->bindParam(':cost', $precio);

if ($consulta->execute()) {
    
} else {
    echo "Error: " . $consulta->errorInfo();
}
header('Location: ../inmuebles.php');
?>