<?php

// Verificar que se reciba un parámetro
if ($argc < 2) {
    echo "Uso: php validateActiveSessions.php <horas>\n";
    exit(1);
}

$hoursThreshold = (int)$argv[1]; // convertir el valor que viene por parametro en el comando a entero

// Incluir conexión existente
require_once __DIR__ . '/../common/connection.php'; // ruta relativa

$sql = "SELECT id, username, last_login_datetime FROM users WHERE status = 'active'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $now = new DateTime();

    while ($row = mysqli_fetch_assoc($result)) {
        $lastLogin = new DateTime($row['last_login_datetime']);
        $diffHours = ($now->getTimestamp() - $lastLogin->getTimestamp()) / 3600;

        if ($diffHours > $hoursThreshold) {
            // Marcar como inactivo
            $updateSql = "UPDATE users SET status = 'inactive' WHERE id = {$row['id']}";
            if (mysqli_query($conn, $updateSql)) {
                echo "Usuario {$row['username']} marcado como inactive (último login hace {$diffHours}h)\n";
            } else {
                echo "Error al actualizar {$row['username']}: " . mysqli_error($conn) . "\n";
            }
        }
    }
} else {
    echo "No hay usuarios activos.\n";
}

mysqli_close($conn);
?>
