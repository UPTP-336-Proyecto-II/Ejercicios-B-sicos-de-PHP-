<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Notas Estudiantiles</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 0 auto; padding: 20px; }
        .resultado { background: #f8f9fa; padding: 15px; margin: 10px 0; border-radius: 5px; }
        .aprobado { border-left: 5px solid #28a745; }
        .reprobado { border-left: 5px solid #dc3545; }
        .excelente { border-left: 5px solid #007bff; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f1f1f1; }
    </style>
</head>
<body>
    <h1>📊 Calculadora de Notas Estudiantiles</h1>

    <?php
    // DATOS INICIALES
    $estudiante1 = "Juan Pérez";
    $estudiante2 = "María López";
    $estudiante3 = "Carlos García";

    // Notas del estudiante 1 (Juan)
    $notas_juan = array(85, 92, 78, 88);
    
    // Notas del estudiante 2 (María)  
    $notas_maria = array(95, 87, 91, 89);
    
    // Notas del estudiante 3 (Carlos)
    $notas_carlos = array(65, 70, 58, 72);

    // TODO: CREAR FUNCIONES NECESARIAS
    
    function calcular_promedio($notas) {
        // TODO: Usar un bucle para sumar todas las notas y dividir entre el total
        // EJEMPLO para XAMPP:
        // $suma = 0;
        // for ($i = 0; $i < count($notas); $i++) {
        //     $suma += $notas[$i];
        // }
        // return $suma / count($notas);
        
        // O más simple:
        // return array_sum($notas) / count($notas);
    }

    function obtener_calificacion($promedio) {
        // TODO: Usar IF-ELSEIF-ELSE para asignar letra
        // 90-100: A, 80-89: B, 70-79: C, 60-69: D, 0-59: F
    }

    function determinar_estado($promedio) {
        // TODO: Usar SWITCH para determinar estado
        // case para rangos: Excelente, Bueno, Regular, Deficiente
    }
    ?>

    <!-- SECCIÓN 1: Procesamiento con Variables y Operadores -->
    <div class="resultado">
        <h2>🧮 Operaciones Básicas con Notas</h2>
        <?php
        // TODO: Trabajar con las notas de Juan
        // Calcular: suma total, promedio, nota más alta, nota más baja
        // Usar operadores aritméticos y de comparación
        
        echo "<h3>Análisis de notas de $estudiante1:</h3>";
        echo "<p>Notas: " . implode(", ", $notas_juan) . "</p>";
        
        // TODO: Calcular suma total usando bucle FOR
        // TODO: Encontrar nota máxima y mínima usando bucle WHILE
        // TODO: Mostrar resultados
        ?>
    </div>

    <!-- SECCIÓN 2: Estructuras Condicionales -->
    <div class="resultado">
        <h2>🎯 Análisis con Condicionales</h2>
        <?php
        // TODO: Para cada estudiante, usar condicionales para determinar:
        // - Si está aprobado (promedio >= 70)
        // - Qué beca merece según su promedio
        // - Mensaje personalizado de motivación

        $estudiantes = array(
            $estudiante1 => $notas_juan,
            $estudiante2 => $notas_maria,
            $estudiante3 => $notas_carlos
        );

        foreach ($estudiantes as $nombre => $notas) {
            $promedio = calcular_promedio($notas);
            
            echo "<h3>$nombre</h3>";
            echo "<p>Promedio: " . round($promedio, 2) . "</p>";
            
            // TODO: Usar IF-ELSE para determinar estado de aprobación
            
            // TODO: Usar IF-ELSEIF para determinar tipo de beca
            // Excelencia (90+), Mérito (80+), Apoyo (70+), Sin beca (<70)
            
            // TODO: Usar operador ternario para mensaje rápido
            // $mensaje = ($promedio >= 70) ? "¡Felicidades!" : "Necesitas mejorar";
        }
        ?>
    </div>

    <!-- SECCIÓN 3: Estructuras de Repetición -->
    <div class="resultado">
        <h2>🔄 Procesamiento con Bucles</h2>
        
        <h3>📈 Tabla de Promedios</h3>
        <table>
            <tr>
                <th>Estudiante</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
                <th>Promedio</th>
                <th>Calificación</th>
                <th>Estado</th>
            </tr>
            <?php
            // TODO: Usar FOREACH para crear una fila para cada estudiante
            foreach ($estudiantes as $nombre => $notas) {
                echo "<tr>";
                echo "<td>$nombre</td>";
                
                // TODO: Usar FOR para mostrar cada nota individual
                
                // TODO: Calcular y mostrar promedio, calificación y estado
                
                echo "</tr>";
            }
            ?>
        </table>

        <h3>🏆 Ranking de Estudiantes</h3>
        <?php
        // TODO: Crear array con promedios para hacer ranking
        $promedios = array();
        
        // TODO: Llenar array de promedios usando FOREACH
        
        // TODO: Ordenar array de mayor a menor (usar arsort)
        
        // TODO: Mostrar ranking usando FOREACH
        $posicion = 1;
        echo "<ol>";
        // foreach para mostrar ranking ordenado
        echo "</ol>";
        ?>
    </div>

    <!-- SECCIÓN 4: Uso Avanzado de Estructuras -->
    <div class="resultado">
        <h2>🎲 Simulador de Notas Adicionales</h2>
        <?php
        echo "<h3>Simulación: ¿Qué pasaría con una nota adicional?</h3>";
        
        // TODO: Para cada estudiante, simular agregar una nota aleatoria
        foreach ($estudiantes as $nombre => $notas) {
            echo "<h4>$nombre</h4>";
            
            $promedio_actual = calcular_promedio($notas);
            echo "<p>Promedio actual: " . round($promedio_actual, 2) . "</p>";
            
            // TODO: Generar nota aleatoria entre 60 y 100
            $nota_extra = rand(60, 100);
            
            // TODO: Calcular nuevo promedio incluyendo la nota extra
            
            // TODO: Usar condicionales para mostrar si mejora o empeora
            
            // TODO: Usar WHILE para mostrar cuántas notas de 100 necesitaría para llegar a promedio 90
            $notas_necesarias = 0;
            $promedio_simulado = $promedio_actual;
            while ($promedio_simulado < 90 && $notas_necesarias < 10) {
                // Simular agregar nota de 100 y recalcular promedio
                $notas_necesarias++;
                // Actualizar promedio simulado
            }
            
            if ($notas_necesarias < 10) {
                echo "<p>Necesitaría $notas_necesarias notas de 100 para llegar a promedio 90</p>";
            } else {
                echo "<p>Necesitaría más de 10 notas perfectas para llegar a promedio 90</p>";
            }
            
            echo "<hr>";
        }
        ?>
    </div>

    <!-- SECCIÓN 5: Estadísticas Generales -->
    <div class="resultado">
        <h2>📊 Estadísticas Generales</h2>
        <?php
        // TODO: Calcular estadísticas del grupo completo
        $total_estudiantes = count($estudiantes);
        $suma_promedios = 0;
        $estudiantes_aprobados = 0;
        
        // TODO: Usar FOREACH para calcular estadísticas generales
        
        // TODO: Mostrar estadísticas finales
        echo "<p><strong>Total de estudiantes:</strong> $total_estudiantes</p>";
        // Promedio general del grupo
        // Porcentaje de aprobación
        // Estudiante con mejor promedio
        // Estudiante con menor promedio
        ?>
    </div>

    <footer style="text-align: center; margin-top: 20px; color: #666;">
        <p>🚀 Calculadora creada con PHP - Demostrando sintaxis y estructuras de control</p>
        <p>Generado el: <?php echo date('d/m/Y H:i:s'); ?></p>
    </footer>
</body>
</html>
