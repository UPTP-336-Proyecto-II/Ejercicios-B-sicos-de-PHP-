<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Explorador de Características PHP</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        .caja { background: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc; }
        .dinamico { background: #e6ffe6; }
        .estatico { background: #ffe6e6; }
        h2 { color: #333; border-bottom: 2px solid #007bff; }
    </style>
</head>
<body>
    <h1>🐘 Explorador de Características PHP</h1>

    <!-- CARACTERÍSTICA 1: Información del Sistema -->
    <div class="caja dinamico">
        <h2>💻 Información del Sistema (Dinámico)</h2>
        <p><strong>Versión de PHP:</strong> <?php /* TODO: Mostrar versión de PHP */ ?></p>
        <p><strong>Sistema Operativo:</strong> <?php /* TODO: Mostrar sistema operativo */ ?></p>
        <p><strong>Servidor Web:</strong> <?php 
        // TODO: Mostrar información del servidor (XAMPP usa Apache)
        echo isset($_SERVER['SERVER_SOFTWARE']) ? $_SERVER['SERVER_SOFTWARE'] : 'XAMPP Apache'; 
        ?></p>
        <p><strong>Fecha y hora actual:</strong> <?php /* TODO: Mostrar fecha y hora */ ?></p>
    </div>

    <!-- CARACTERÍSTICA 2: Comparación Estático vs Dinámico -->
    <div class="caja estatico">
        <h2>📄 Contenido Estático (HTML)</h2>
        <p>Este mensaje siempre será igual.</p>
        <p>La fecha es: 28/09/2025</p>
        <p>Visitante número: 1</p>
    </div>

    <div class="caja dinamico">
        <h2>🔄 Contenido Dinámico (PHP)</h2>
        <?php
        // TODO: Crear variable con mensaje que cambie según la hora del día
        // Si es antes de las 12: "Buenos días"
        // Si es entre 12 y 18: "Buenas tardes"  
        // Si es después de las 18: "Buenas noches"
        
        // EJEMPLO para XAMPP:
        // $hora = (int)date('H');
        // if ($hora < 12) {
        //     $saludo = "Buenos días";
        //     $emoji = "🌅";
        // } elseif ($hora < 18) {
        //     $saludo = "Buenas tardes";
        //     $emoji = "☀️";
        // } else {
        //     $saludo = "Buenas noches";
        //     $emoji = "🌙";
        // }
        // echo "<p>$emoji $saludo (Son las " . date('H:i') . ")</p>";
        
        // TODO: Mostrar fecha actual en formato español
        // echo "<p>Fecha actual: " . date('d/m/Y') . "</p>";
        
        // TODO: Simular contador de visitas (número aleatorio entre 1 y 1000)
        // $visitas = rand(1, 1000);
        // echo "<p>Visitante número: $visitas</p>";
        ?>
    </div>

    <!-- CARACTERÍSTICA 3: Tipado Dinámico -->
    <div class="caja">
        <h2>🔀 Demostración de Tipado Dinámico</h2>
        <?php
        // TODO: Crear una variable y cambiar su tipo
        // Ejemplo: $variable = "Hola"; luego $variable = 123; luego $variable = true;
        // Mostrar el tipo de la variable en cada cambio usando gettype()
        ?>
    </div>

    <!-- CARACTERÍSTICA 4: Multiplataforma -->
    <div class="caja">
        <h2>🌐 Características Multiplataforma</h2>
        <?php
        // TODO: Mostrar información que demuestre que PHP funciona igual en diferentes sistemas
        // Usar DIRECTORY_SEPARATOR para mostrar el separador de directorios
        // Mostrar la ruta actual usando __DIR__
        
        // EJEMPLOS para XAMPP:
        echo "<p><strong>Separador de directorios:</strong> " . DIRECTORY_SEPARATOR . "</p>";
        echo "<p><strong>Directorio actual:</strong> " . __DIR__ . "</p>";
        echo "<p><strong>Archivo actual:</strong> " . __FILE__ . "</p>";
        echo "<p><strong>Directorio de XAMPP:</strong> " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
        ?>
    </div>

    <!-- CARACTERÍSTICA 5: Integración con HTML -->
    <div class="caja">
        <h2>🎨 Integración PHP + HTML</h2>
        <p>Lista de tecnologías web:</p>
        <ul>
            <?php
            // TODO: Crear un array con tecnologías web y mostrarlas en una lista HTML
            // Ejemplo: $tecnologias = array("HTML", "CSS", "JavaScript", "PHP", "MySQL");
            ?>
        </ul>
    </div>

    <footer style="text-align: center; margin-top: 30px; color: #666;">
        <p>Página generada con PHP el <?php /* TODO: Mostrar fecha actual */ ?></p>
    </footer>
</body>
</html>
