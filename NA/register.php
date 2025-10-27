<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 flex items-center justify-center min-h-screen">
  <form action="procesar.php" method="POST" class="bg-gray-800 p-8 rounded-xl shadow-lg w-full max-w-md text-white">
    <h2 class="text-2xl font-bold mb-6 text-center">Registro de Usuario</h2>

    <div class="mb-4">
      <label for="full_name" class="block text-sm mb-2">Nombre completo</label>
      <input type="text" id="full_name" name="full_name" required class="w-full px-3 py-2 rounded-lg bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
      <label for="email" class="block text-sm mb-2">Correo electrónico</label>
      <input type="email" id="email" name="email" required class="w-full px-3 py-2 rounded-lg bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
      <label for="document" class="block text-sm mb-2">Documento</label>
      <input type="text" id="document" name="document" required class="w-full px-3 py-2 rounded-lg bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
      <label for="user" class="block text-sm mb-2">Usuario</label>
      <input type="text" id="user" name="user" required class="w-full px-3 py-2 rounded-lg bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-6">
      <label for="password" class="block text-sm mb-2">Contraseña</label>
      <input type="password" id="password" name="password" required class="w-full px-3 py-2 rounded-lg bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white py-2 rounded-lg font-semibold transition">
      Registrar
    </button>
  </form>
</body>
</html>
