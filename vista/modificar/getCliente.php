<?php
require '../../config/conexion2.php';
$id = $conn->real_escape_string($_POST['id']);
$sql = "SELECT * FROM t_cli WHERE id=$id LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;
$cliente = [];
if($rows > 0){
    $cliente = $resultado->fetch_array();
}
//  JSON_UNESCAPED_UNICODE ES EN CASO DE ACENTOS PARA QUE LOS PROCESE CORRECTAMENTE
echo json_encode($cliente, JSON_UNESCAPED_UNICODE);