<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Talleres</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">
  <div class="bg-gray-700 p-6 rounded-xl shadow-lg text-white text-center">
    <h1 class="text-3xl font-bold p-2 mb-4">Talleres</h1>

    <div class="flex flex-col gap-3">
      <?php
        // Directorio donde están tus talleres
        $baseDir = __DIR__;  

        // Obtener solo carpetas
        $folders = array_filter(glob($baseDir . '/*'), 'is_dir');

        foreach ($folders as $folder) {
            $name = basename($folder); // nombre de la carpeta
            $indexHtml = $folder . '/index.html';
            $indexPhp  = $folder . '/index.php';

            // Si existe index.html o index.php, mostrar el enlace
            if (file_exists($indexHtml)) {
                echo "<a href='$name/index.html' class='bg-blue-600 hover:bg-blue-500 px-4 py-2 rounded-lg shadow text-white font-semibold transition'>
                        $name
                      </a>";
            } elseif (file_exists($indexPhp)) {
                echo "<a href='$name/index.php' class='bg-green-600 hover:bg-green-500 px-4 py-2 rounded-lg shadow text-white font-semibold transition'>
                        $name
                      </a>";
            }
        }
      ?>
    </div>
  </div>
</body>
</html>
