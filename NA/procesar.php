<?php
require('functions.php');
// Verificar si el formulario fue enviado por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Capturar los valores enviados desde el formulario
    $full_name = trim($_POST['full_name'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $document  = trim($_POST['document'] ?? '');
    $user      = trim($_POST['user'] ?? '');
    $password  = trim($_POST['password'] ?? '');

    // Validar que no estén vacíos
    if (empty($full_name) || empty($email) || empty($document) || empty($user) || empty($password)) {
        echo "<h2 style='color:red;'>Por favor, complete todos los campos.</h2>";
        exit;
    }

    // Encriptar la contraseña antes de guardar
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Crear arreglo
    $student = [
        'full_name' => $full_name,
        'email'     => $email,
        'document'  => $document,
        'user'      => $user,
        'password'  => $password
    ];
    
   if (saveStudent($student) === TRUE) {
        // Redirigir a login con el usuario
        header("Location: index.php?user=" . urlencode($user));
        exit();
    } else {
        echo "<h2 style='color:red;'>Error al guardar el registro.</h2>";
    }

    
} else {
    // Si alguien intenta entrar directamente sin enviar el formulario
    echo "<h2 style='color:red;'>Acceso no permitido.</h2>";
}
