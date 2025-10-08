<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>Iniciar Sesión</h1>

  <?php
  $username = isset($_GET['username']) ? $_GET['username'] : '';
  ?>

  <form action="login_process.php" method="post">
    <label for="username">Usuario:</label><br>
    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required><br><br>

    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Entrar</button>
  </form>
</body>
</html>
