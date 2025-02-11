<?php
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

// Obtener datos del formulario
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$contrasena = $_POST['password'] ?? '';
$fecha_nacimiento = $_POST['fecha_nacimiento'] ?? '';

// Preparar la consulta SQL
$sql = "INSERT INTO usuarios (nombre, correo, contraseña, fecha_nacimiento) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nombre, $correo, $contrasena, $fecha_nacimiento);

// Ejecutar la consulta
if ($stmt->execute()) {
    header("Location: index.php");
    exit();
} else {
    echo "<p>Error: " . $stmt->error . "</p>";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>