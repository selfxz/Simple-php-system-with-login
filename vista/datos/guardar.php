<?php
session_start();
require_once "../../config/conexion2.php";

$nombre = $conn->real_escape_string($_POST['nombre']);
$email = $conn->real_escape_string($_POST['email']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$dni = $conn->real_escape_string($_POST['dni']);


$sql = "INSERT INTO t_cli (nombre,email,telefono,dni,fecha)
/*NOW() es para que capture la fecha actual */
VALUES('$nombre','$email',$telefono,$dni,NOW())";
if($conn->query($sql)){
    $id = $conn->insert_id;

    if($_FILES['imagen']['error'] == UPLOAD_ERR_OK){
        $permitidos = array("image/jpg", "image/jpeg", "image/png");
        if (in_array($_FILES['imagen']['type'], $permitidos)){
            $dir = "imagenes";
            $imagen = $dir . '/' . $id . '.jpg';
            if(!file_exists($dir)){
                mkdir($dir, 0777);
            }
            if(!move_uploaded_file($_FILES['imagen']['tmp_name'],$imagen)){
                $_SESSION['msg'] .= "ERROR AL GUARDAR IMAGEN";
            }
        }else{
            $_SESSION['msg'] .= "<br>FORMATO DE IMAGEN NO PERMITIDO";
        }
    }
}else{
    $_SESSION['msg'] = "ERROR AL GUARDAR IMAGEN";
}
header('Location: ../../tabla.php');