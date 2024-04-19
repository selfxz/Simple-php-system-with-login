<?php
require_once "../config/conexion4.php";

$direccion = $_POST['ubi'];
$tipo_propiedad = $_POST['tipo_propiedad'];
$vivienda = $_POST['vivienda'];
$precio = $_POST['cost'];

$consulta = $sql->prepare("INSERT INTO t_ter (Direccion, Tipo_propiedad, Vivienda, precio) VALUES (:direccion, :tipo_propiedad, :vivienda, :precio)");
$consulta->bindParam(':direccion', $direccion);
$consulta->bindParam(':tipo_propiedad', $tipo_propiedad);
$consulta->bindParam(':vivienda', $vivienda);
$consulta->bindParam(':precio', $precio);

if ($consulta->execute()) {
  
} else {
    echo "Error: " . $consulta->errorInfo();
}
header('Location: ../terrenos.php');
?>