<?php
require_once "../../config/conexion.php";
$Nombre=$_POST['nom_usu'];
$Email=$_POST['eml_usu'];
$Contraseña=$_POST['pas_usu'];

$consulta= $sql->prepare("INSERT INTO t_usuario(nombre_usu,email_usu,password_usu)values(:nom_usu,:eml_usu,:pas_usu)");

$consulta->bindParam(':nom_usu',$Nombre);
$consulta->bindParam(':eml_usu',$Email);
$consulta->bindParam(':pas_usu',$Contraseña);

if($consulta->execute()){

}else{
echo "errr";
}
header('Location: ../../index.php');

?>
