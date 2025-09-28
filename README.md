# Dos Ejercicios Básicos de PHP para XAMPP

## ⚙️ **CONFIGURACIÓN PREVIA**

### **Pasos para usar con XAMPP:**
1. **Iniciar XAMPP** - Abrir XAMPP Control Panel
2. **Activar servicios** - Hacer clic en "Start" para Apache
3. **Crear carpeta** - En `C:\xampp\htdocs\` crear carpeta `ejercicios-php`
4. **Guardar archivos** - Guardar cada ejercicio como `.php` en esa carpeta
5. **Acceder** - Ir a `http://localhost/ejercicios-php/nombre-archivo.php`

### **Estructura de archivos recomendada:**
```
C:\xampp\htdocs\ejercicios-php\
├── ejercicio1-caracteristicas.php
└── ejercicio2-calculadora.php
```

---

## 🔧 **EJERCICIO 1: "Explorador de Características PHP"**
**Tema:** Fundamentos y características principales de PHP

### 🎯 **Objetivo:**
Crear una página que demuestre las características principales de PHP y muestre información del sistema, comparando contenido estático vs dinámico.

### 📝 **Instrucciones:**
Completa el siguiente código para crear una página que muestre las características de PHP:

```php
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
```

### ✅ **Tareas a Completar:**
1. Mostrar versión de PHP y información del sistema
2. Crear mensaje dinámico según la hora del día
3. Demostrar tipado dinámico cambiando el tipo de una variable
4. Mostrar características multiplataforma
5. Crear lista de tecnologías usando PHP dentro de HTML

### 🚀 **Para probar en XAMPP:**
1. Guardar como `ejercicio1-caracteristicas.php` en `C:\xampp\htdocs\ejercicios-php\`
2. Abrir navegador y ir a: `http://localhost/ejercicios-php/ejercicio1-caracteristicas.php`
3. Verificar que muestre información del sistema XAMPP

---

## 🎮 **EJERCICIO 2: "Calculadora de Notas Estudiantiles"**
**Tema:** Sintaxis básica y estructuras de control

### 🎯 **Objetivo:**
Crear una calculadora que procese notas de estudiantes usando variables, operadores, condicionales, bucles y funciones.

### 📝 **Instrucciones:**
Completa el siguiente código para crear un sistema de procesamiento de notas:

```php
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
```

### ✅ **Tareas a Completar:**
1. **Implementar funciones** de cálculo de promedio, calificación y estado
2. **Usar operadores** aritméticos para cálculos y comparación para evaluaciones
3. **Aplicar condicionales** IF-ELSE y SWITCH para clasificar estudiantes
4. **Implementar bucles** FOR, WHILE y FOREACH para procesar datos
5. **Crear tabla dinámica** con todos los resultados
6. **Generar ranking** ordenado de estudiantes
7. **Calcular estadísticas** generales del grupo

### 🚀 **Para probar en XAMPP:**
1. Guardar como `ejercicio2-calculadora.php` en `C:\xampp\htdocs\ejercicios-php\`
2. Abrir navegador y ir a: `http://localhost/ejercicios-php/ejercicio2-calculadora.php`
3. Verificar que los cálculos funcionen correctamente

### 📋 **Troubleshooting XAMPP:**
- **Si no carga:** Verificar que Apache esté iniciado en XAMPP Control Panel
- **Si da error:** Revisar la sintaxis PHP en cada TODO completado
- **Si no encuentra archivo:** Verificar la ruta `C:\xampp\htdocs\ejercicios-php\`

---

## 🎯 **Evaluación de los Ejercicios**

### **Ejercicio 1 - Fundamentos PHP:**
- ✅ Muestra información del sistema PHP
- ✅ Demuestra contenido dinámico vs estático
- ✅ Ejemplifica tipado dinámico
- ✅ Prueba características multiplataforma
- ✅ Integra PHP con HTML correctamente

### **Ejercicio 2 - Sintaxis y Control:**
- ✅ Usa variables y arrays correctamente
- ✅ Aplica todos los operadores
- ✅ Implementa estructuras condicionales
- ✅ Utiliza todos los tipos de bucles
- ✅ Crea y usa funciones personalizadas
- ✅ Procesa datos complejos

### **Nivel de Dificultad:** 
- **Ejercicio 1:** Básico (ideal para principiantes)
- **Ejercicio 2:** Básico-Intermedio (consolida conceptos)

**¡Estos ejercicios están optimizados para funcionar perfectamente con XAMPP!** 🚀

## 🔧 **GUÍA RÁPIDA XAMPP:**

### **Inicio Rápido:**
1. **Abrir XAMPP Control Panel**
2. **Hacer clic en "Start" junto a Apache**
3. **Crear carpeta:** `C:\xampp\htdocs\ejercicios-php\`
4. **Guardar archivos PHP** en esa carpeta
5. **Abrir navegador:** `http://localhost/ejercicios-php/archivo.php`

### **Verificación:**
- ✅ XAMPP Apache iniciado (luz verde)
- ✅ Archivos en `htdocs/ejercicios-php/`
- ✅ URL: `http://localhost/ejercicios-php/`
- ✅ Extensión `.php` en los archivos

### **Solución de Problemas:**
- **Error 404:** Verificar ruta de archivo
- **Página en blanco:** Revisar sintaxis PHP
- **Apache no inicia:** Cerrar Skype o cambiar puerto
