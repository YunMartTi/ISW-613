<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "registro_usuarios");
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$username = $_POST['username'];
$password = $_POST['password'];
$provincia = $_POST['provincia'];

$password_hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, apellidos, username, password, provincia_id)
        VALUES ('$nombre', '$apellidos', '$username', '$password_hash', '$provincia')";

if ($conn->query($sql) === TRUE) {
  // Redirigir a login con el username en la URL
  header("Location: login.php?username=" . urlencode($username));
  exit();
} else {
  echo "Error al guardar: " . $conn->error;
}

$conn->close();
?>
