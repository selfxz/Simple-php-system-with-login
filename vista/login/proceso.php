<?php
session_start();
include '../../config/conexion.php';

$usuario =$_POST['txtEml'];
$contrasena = $_POST['txtPass'];
$sentencia = $sql ->prepare('select * from t_usuario where email_usu = ? and password_usu = ?;');

$sentencia->execute([$usuario, $contrasena]);
$datos =$sentencia->fetch(PDO::FETCH_OBJ);

if($datos === FALSE)
{
    echo '<script>
    alert("Datos de usuario o contraseña ingresados son incorrectos."); 
    window.location.href = "../../index.php";
</script>';
  
}elseif($sentencia->rowCount() ==1){
    $_SESSION['nombre'] = $datos->nombre_usu;
    header('Location: mostrar.php');
}

?>