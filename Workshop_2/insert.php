<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-gray-700">
  <div class="mt-6 bg-gray-700 p-6 rounded-xl shadow-lg text-white text-center">
    <?php
      $userName = $_REQUEST['userName'];
      $lastName = $_REQUEST['lastName'];
      $email = $_REQUEST['email'];
      $phoneNumber = $_REQUEST['phoneNumber'];

      // Conexion a la BD
      $host = "localhost";
      $usuario = "root";   
      $password = ""; 
      $base_datos = "workshop2";

      $conexion = new mysqli($host, $usuario, $password, $base_datos);

      if ($conexion->connect_error) {
          die("Error de conexión: " . $conexion->connect_error);
      } else {
          $sql = "INSERT INTO users (userName, lastName, email, phoneNumber) VALUES ('$userName', '$lastName', '$email', '$phoneNumber')";
           if ($conexion->query($sql) === TRUE) {
                header("Location: index.php");
                exit();
            } else {
                echo "❌ Error: " . $conexion->error;
            }

      }
    $conexion->close();
    ?>

  </div>
</body>
</html>