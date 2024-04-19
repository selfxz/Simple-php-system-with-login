<?php
require_once __DIR__ . '/vendor/autoload.php'; // Asegúrate de que esta ruta sea correcta
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['HOST'];
$usuario = $_ENV['USUARIO'];
$contrasena = $_ENV['CONTRASENA'];
$bd = $_ENV['BD'];

// Crear la conexión
$conn = new mysqli($host, $usuario, $contrasena, $bd);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

?>