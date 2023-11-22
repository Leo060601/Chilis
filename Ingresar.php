<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "141706054";
$dbname = "registro";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$horario = $_POST['horario'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Insertar datos en la base de datos
$sql = "INSERT INTO reservas (nombre, fecha, horario, email, mensaje) VALUES ('$nombre', '$fecha', '$horario', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Reserva enviada con éxito";
} else {
    echo "Error al enviar la reserva: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
