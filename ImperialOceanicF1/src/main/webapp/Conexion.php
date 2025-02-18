<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "bppzhrdgz4ehcc5l7sem-mysql.services.clever-cloud.com";
$username = "ulcpeik6z9ed9k6p";
$password = "bfnlGrx8vXNofMtaHgQE";
$dbname = "bppzhrdgz4ehcc5l7sem";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recibir y validar los datos
    $destino = $_POST['destino'] ?? '';
    $duracion = $_POST['duracion'] ?? '';
    $camarote = $_POST['tipo-camarote'] ?? '';
    $pasajeros = $_POST['pasajeros'] ?? '';
    $excursiones = $_POST['excursiones'] ?? '';
    $servicios_extra = $_POST['servicios-extra'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $dni_pasaporte = $_POST['dni'] ?? '';
    $fechanac = $_POST['fecha-nacimiento'] ?? '';
    $telefono = $_POST['telefono'] ?? '';

    // Validación en PHP (básica)
    if (empty($destino) || empty($duracion) || empty($camarote) || empty($pasajeros) ||
        empty($nombre) || empty($dni_pasaporte) || empty($fechanac) || empty($telefono)) {

        die("Por favor, completa todos los campos obligatorios.");
    }

    // Preparar la consulta SQL para evitar inyección SQL
    $sql = "INSERT INTO ticket (destino, duracion, camarote, pasajeros, excursiones, servicios_extra, nombre, dni_pasaporte, fechanac, telefono)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssssssss", $destino, $duracion, $camarote, $pasajeros, $excursiones, $servicios_extra, $nombre, $dni_pasaporte, $fechanac, $telefono);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "<script>alert('Reserva exitosa. Redirigiendo...'); window.location.href='reserva3.jsp';</script>";
        } else {
            echo "Error al guardar los datos: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error al preparar la consulta.";
    }
}

// Cerrar la conexión
$conn->close();
?>
