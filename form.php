<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Usuario</title>
</head>
<body>
  <h1>Registro de Usuario</h1>

  <?php
  $conn = new mysqli("localhost", "root", "", "registro_usuarios");
  if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
  }

  // Consultar provincias
  $result = $conn->query("SELECT id, nombre FROM provincias");
  ?>

  <form action="save.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apellidos">Apellidos:</label><br>
    <input type="text" id="apellidos" name="apellidos" required><br><br>

    <label for="username">Nombre de usuario:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Contraseña:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <label for="provincia">Provincia:</label><br>
    <select name="provincia" id="provincia" required>
      <option value="">Seleccione una provincia</option>
      <?php
      while ($row = $result->fetch_assoc()) {
        echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
      }
      ?>
    </select><br><br>

    <button type="submit">Registrar</button>
  </form>

</body>
</html>
