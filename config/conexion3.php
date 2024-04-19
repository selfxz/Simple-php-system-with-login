    <?php
    require_once __DIR__ . '/vendor/autoload.php'; // Asegúrate de que esta ruta sea correcta
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $host = $_ENV['HOST'];
    $usuario = $_ENV['USUARIO'];
    $contrasena = $_ENV['CONTRASENA'];
    $bd = $_ENV['BD'];

    try {
        $sql = new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasena);
        $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
    ?>