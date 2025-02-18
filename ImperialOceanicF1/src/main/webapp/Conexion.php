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

// Validar que los datos vengan por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario de manera segura
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

    // Validación en PHP para evitar datos vacíos
    if (empty($destino) || empty($duracion) || empty($camarote) || empty($pasajeros) ||
        empty($nombre) || empty($dni_pasaporte) || empty($fechanac) || empty($telefono)) {

        die("Error: Todos los campos obligatorios deben ser completados.");
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO ticket (destino, duracion, camarote, pasajeros, excursiones, servicios_extra, nombre, dni_pasaporte, fechanac, telefono)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssssssss", $destino, $duracion, $camarote, $pasajeros, $excursiones, $servicios_extra, $nombre, $dni_pasaporte, $fechanac, $telefono);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Redirigir si la inserción fue exitosa
            header("Location: reserva3.jsp");
            exit();
        } else {
            echo "Error en la inserción: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error al preparar la consulta.";
    }
}

// Cerrar la conexión
$conn->close();
?>
