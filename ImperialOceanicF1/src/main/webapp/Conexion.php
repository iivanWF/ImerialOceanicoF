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
$destino = $_GET['destino'] ?? '';
$duracion = $_GET['duracion'] ?? '';
$camarote = $_GET['tipo-camarote'] ?? '';
$pasajeros = $_GET['pasajeros'] ?? '';
$excursiones = $_GET['excursiones'] ?? '';
$servicios_extra = $_GET['servicios-extra'] ?? '';
$nombre = $_GET['nombre'] ?? '';
$dni_pasaporte = $_GET['dni'] ?? '';
$fechanac = $_GET['fecha-nacimiento'] ?? '';
$telefono = $_GET['telefono'] ?? '';

// Preparar la consulta SQL
$sql = "INSERT INTO ticket (destino, duracion, camarote, pasajeros, excursiones, servicios_extra, nombre, dni_pasaporte, fechanac, telefono) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssss", $destino, $duracion, $camarote, $pasajeros, $excursiones, $servicios_extra, $nombre, $dni_pasaporte, $fechanac, $telefono);

// Ejecutar la consulta
if ($stmt->execute()) {
    header("Location: reserva3.jsp");
    exit();
} else {
    echo "<p>Error: " . $stmt->error . "</p>";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
