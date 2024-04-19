<?php
require_once "../../config/conexion2.php";

$id = $conn->real_escape_string($_POST['id']);

$sql = "DELETE FROM t_cli WHERE id=$id";

if($conn->query($sql)){
    $dir = "imagenes";
    $imagen = $dir . '/' . $id . '.jpg';

    if(file_exists($imagen)){
        unlink($imagen);
    }
}
header('Location: ../../tabla.php');
?>