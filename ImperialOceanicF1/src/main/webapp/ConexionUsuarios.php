<?php
session_start();

$servername = "bppzhrdgz4ehcc5l7sem-mysql.services.clever-cloud.com";
$username = "ulcpeik6z9ed9k6p";
$password = "bfnlGrx8vXNofMtaHgQE";
$dbname = "bppzhrdgz4ehcc5l7sem";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    header("Location: index.php");
    exit();
}

// Obtener datos del formulario
$correo = $_POST['email'] ?? '';
$contrasena = $_POST['password'] ?? '';

// Preparar la consulta SQL
$sql = "SELECT * FROM usuarios WHERE correo = ? AND contraseña = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $correo, $contrasena);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['usuario'] = $row['nombre'];
    $_SESSION['correo'] = $correo;
    header("Location: index.php");
    exit();
} else {
    header("Location: iniciosesion.html");
    exit();
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
