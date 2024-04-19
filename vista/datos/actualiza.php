<?php
require_once "../../config/conexion2.php";

$id = $conn->real_escape_string($_POST['id']);
$nombre = $conn->real_escape_string($_POST['nombre']);
$email = $conn->real_escape_string($_POST['email']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$dni = $conn->real_escape_string($_POST['dni']);


$sql = "UPDATE t_cli 
SET nombre = '$nombre', email = '$email', telefono = $telefono, dni = $dni WHERE id=$id";

if($conn->query($sql)){

    if($_FILES['imagen']['error'] == UPLOAD_ERR_OK){
        $permitidos = array("image/jpg", "image/jpeg", "image/png");
        if (in_array($_FILES['imagen']['type'], $permitidos)){
            $dir = "imagenes";
            $imagen = $dir . '/' . $id . '.jpg';
            if(!file_exists($dir)){
                mkdir($dir, 0777);
            }
            if(!move_uploaded_file($_FILES['imagen']['tmp_name'],$imagen)){
            }
        
    }
}
}

header('Location: ../../tabla.php');