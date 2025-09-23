<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-700 text-white text-center mt-6 font-bold">
  <h1>Ingrese sus datos para el registro<h1>

  <div class="mt-6 bg-gray-700 p-6 rounded-xl shadow-lg text-white text-center flex items-center justify-center">
        <form class="bg-gray-700" action="insert.php" method="post">
            <label>Nombre</label>
            <input class="text-gray-700" type="text" id="userName" name="userName" required>
            <label>Apellido</label>
            <input class="text-gray-700" type="text" id="lastName" name="lastName" required>
            <label>Correo</label>
            <input class="text-gray-700" type="text" id="email" name="email" required>
            <label>Telefono</label>
            <input class="text-gray-700" type="text" id="phoneNumber" name="phoneNumber" required>
            <button type="submit" class="bg-gray-300">Insertar</button>
        </form>
   </div>
</body>
</html>