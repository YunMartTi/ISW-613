<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">
  <div class="bg-gray-700 p-8 rounded-xl shadow-lg text-white text-center">
    <h1 class="text-3xl font-bold p-2">Reloj Costa Rica - PHP</h1>
    <?php
        date_default_timezone_set("America/Costa_Rica");

        $fecha = date("d-m-Y");   
        $hora  = date("H:i:s");   
        // Mostrar en pantalla
        echo "<h2>Fecha actual: $fecha</h2>";
        echo "<h2>Hora actual: $hora</h2>";
    ?>
    <a href="index.html" 
      class="bg-gray-700 text-white font-semibold px-4 rounded-lg border-2 border-gray-600 hover:bg-gray-600 hover:border-gray-500 transition cursor-pointer">
      Ver con HTML
    </a>  
  </div>
  
</body>
</html>
