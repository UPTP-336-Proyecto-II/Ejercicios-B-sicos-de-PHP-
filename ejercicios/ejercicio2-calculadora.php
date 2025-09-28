<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🧮 Calculadora PHP Funcional</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 500px;
            width: 100%;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        
        .calculadora {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
        }
        
        .input-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input[type="number"]:focus {
            outline: none;
            border-color: #007bff;
        }
        
        .operacion-group {
            margin-bottom: 25px;
        }
        
        .operaciones {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 10px;
            margin-top: 10px;
        }
        
        .operacion-btn {
            background: #007bff;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            text-align: center;
            display: inline-block;
        }
        
        .operacion-btn:hover {
            background: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,123,255,0.4);
        }
        
        .btn-suma { background: #28a745; }
        .btn-suma:hover { background: #1e7e34; }
        
        .btn-resta { background: #dc3545; }
        .btn-resta:hover { background: #c82333; }
        
        .btn-multiplicacion { background: #fd7e14; }
        .btn-multiplicacion:hover { background: #e55100; }
        
        .btn-division { background: #6f42c1; }
        .btn-division:hover { background: #5a2d91; }
        
        .btn-potencia { background: #20c997; }
        .btn-potencia:hover { background: #17a085; }
        
        .btn-raiz { background: #e83e8c; }
        .btn-raiz:hover { background: #d11671; }
        
        .resultado {
            background: #e8f5e8;
            border: 2px solid #28a745;
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
        }
        
        .resultado h3 {
            color: #155724;
            margin-bottom: 15px;
            font-size: 1.4em;
        }
        
        .calculo {
            font-size: 1.2em;
            color: #333;
            margin: 10px 0;
        }
        
        .numero-grande {
            font-size: 2em;
            font-weight: bold;
            color: #28a745;
            margin: 15px 0;
        }
        
        .error {
            background: #f8d7da;
            border: 2px solid #dc3545;
            color: #721c24;
        }
        
        .error h3 {
            color: #721c24;
        }
        
        .historial {
            background: #fff3cd;
            border-radius: 12px;
            padding: 20px;
            margin-top: 20px;
        }
        
        .historial h3 {
            color: #856404;
            margin-bottom: 15px;
        }
        
        .operacion-realizada {
            background: white;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border-left: 4px solid #ffc107;
        }
        
        .limpiar-btn {
            background: #6c757d;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            margin-top: 15px;
            width: 100%;
        }
        
        .limpiar-btn:hover {
            background: #5a6268;
        }
        
        .funciones-extra {
            margin-top: 20px;
            padding: 20px;
            background: #e3f2fd;
            border-radius: 12px;
        }
        
        .funciones-extra h4 {
            color: #1565c0;
            margin-bottom: 15px;
        }
        
        .funcion-resultado {
            background: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            border-left: 4px solid #2196f3;
        }
        
        @media (max-width: 600px) {
            .container {
                margin: 10px;
                padding: 20px;
            }
            
            .operaciones {
                grid-template-columns: repeat(2, 1fr);
            }
            
            h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🧮 Calculadora PHP</h1>
        
        <?php
        // Inicializar variables
        $numero1 = isset($_GET['num1']) ? (float)$_GET['num1'] : 0;
        $numero2 = isset($_GET['num2']) ? (float)$_GET['num2'] : 0;
        $operacion = isset($_GET['op']) ? $_GET['op'] : '';
        $resultado = 0;
        $error = '';
        $mostrar_resultado = false;
        
        // Función para formatear números
        function formatear_numero($numero) {
            if (is_float($numero) && floor($numero) == $numero) {
                return number_format($numero, 0);
            }
            return number_format($numero, 2);
        }
        
        // Función para obtener símbolo de operación
        function obtener_simbolo($op) {
            switch($op) {
                case 'suma': return '+';
                case 'resta': return '-';
                case 'multiplicacion': return '×';
                case 'division': return '÷';
                case 'potencia': return '^';
                case 'raiz': return '√';
                default: return '';
            }
        }
        
        // Función para obtener nombre de operación
        function obtener_nombre($op) {
            switch($op) {
                case 'suma': return 'Suma';
                case 'resta': return 'Resta';
                case 'multiplicacion': return 'Multiplicación';
                case 'division': return 'División';
                case 'potencia': return 'Potencia';
                case 'raiz': return 'Raíz Cuadrada';
                default: return 'Operación';
            }
        }
        
        // Procesar la operación
        if (!empty($operacion) && ($numero1 != 0 || $numero2 != 0 || $operacion == 'raiz')) {
            $mostrar_resultado = true;
            
            switch($operacion) {
                case 'suma':
                    $resultado = $numero1 + $numero2;
                    break;
                    
                case 'resta':
                    $resultado = $numero1 - $numero2;
                    break;
                    
                case 'multiplicacion':
                    $resultado = $numero1 * $numero2;
                    break;
                    
                case 'division':
                    if ($numero2 != 0) {
                        $resultado = $numero1 / $numero2;
                    } else {
                        $error = "Error: No se puede dividir entre cero";
                    }
                    break;
                    
                case 'potencia':
                    $resultado = pow($numero1, $numero2);
                    break;
                    
                case 'raiz':
                    if ($numero1 >= 0) {
                        $resultado = sqrt($numero1);
                    } else {
                        $error = "Error: No se puede calcular la raíz cuadrada de un número negativo";
                    }
                    break;
                    
                default:
                    $error = "Operación no válida";
                    break;
            }
        }
        
        // Guardar en historial (simulado con sesión)
        session_start();
        if (!isset($_SESSION['historial'])) {
            $_SESSION['historial'] = array();
        }
        
        if ($mostrar_resultado && empty($error)) {
            $operacion_texto = '';
            if ($operacion == 'raiz') {
                $operacion_texto = "√" . formatear_numero($numero1) . " = " . formatear_numero($resultado);
            } else {
                $simbolo = obtener_simbolo($operacion);
                $operacion_texto = formatear_numero($numero1) . " $simbolo " . formatear_numero($numero2) . " = " . formatear_numero($resultado);
            }
            
            // Agregar al historial (máximo 5 operaciones)
            array_unshift($_SESSION['historial'], $operacion_texto);
            if (count($_SESSION['historial']) > 5) {
                array_pop($_SESSION['historial']);
            }
        }
        
        // Limpiar historial
        if (isset($_GET['limpiar'])) {
            $_SESSION['historial'] = array();
            header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
            exit;
        }
        ?>
        
        <div class="calculadora">
            <form method="GET">
                <div class="input-group">
                    <label for="num1">🔢 Primer Número:</label>
                    <input type="number" id="num1" name="num1" step="any" value="<?php echo $numero1; ?>" required>
                </div>
                
                <div class="input-group">
                    <label for="num2">🔢 Segundo Número:</label>
                    <input type="number" id="num2" name="num2" step="any" value="<?php echo $numero2; ?>" 
                           <?php echo ($operacion == 'raiz') ? 'style="display:none;"' : ''; ?>>
                </div>
                
                <div class="operacion-group">
                    <label>⚙️ Selecciona una Operación:</label>
                    <div class="operaciones">
                        <button type="submit" name="op" value="suma" class="operacion-btn btn-suma">
                            ➕ Sumar
                        </button>
                        <button type="submit" name="op" value="resta" class="operacion-btn btn-resta">
                            ➖ Restar
                        </button>
                        <button type="submit" name="op" value="multiplicacion" class="operacion-btn btn-multiplicacion">
                            ✖️ Multiplicar
                        </button>
                        <button type="submit" name="op" value="division" class="operacion-btn btn-division">
                            ➗ Dividir
                        </button>
                        <button type="submit" name="op" value="potencia" class="operacion-btn btn-potencia">
                            🔺 Potencia
                        </button>
                        <button type="submit" name="op" value="raiz" class="operacion-btn btn-raiz">
                            √ Raíz
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
        <?php if ($mostrar_resultado): ?>
        <div class="resultado <?php echo !empty($error) ? 'error' : ''; ?>">
            <?php if (!empty($error)): ?>
                <h3>❌ Error</h3>
                <p class="calculo"><?php echo $error; ?></p>
            <?php else: ?>
                <h3>✅ Resultado de <?php echo obtener_nombre($operacion); ?></h3>
                
                <?php if ($operacion == 'raiz'): ?>
                    <p class="calculo">√<?php echo formatear_numero($numero1); ?></p>
                <?php else: ?>
                    <p class="calculo">
                        <?php echo formatear_numero($numero1); ?> 
                        <?php echo obtener_simbolo($operacion); ?> 
                        <?php echo formatear_numero($numero2); ?>
                    </p>
                <?php endif; ?>
                
                <div class="numero-grande">
                    = <?php echo formatear_numero($resultado); ?>
                </div>
                
                <p><small>⏰ Calculado el <?php echo date('d/m/Y H:i:s'); ?></small></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <!-- Funciones Extra -->
        <div class="funciones-extra">
            <h4>🎯 Funciones Adicionales</h4>
            
            <?php if ($numero1 != 0): ?>
            <div class="funcion-resultado">
                <strong>📊 Análisis del Número <?php echo formatear_numero($numero1); ?>:</strong><br>
                • Cuadrado: <?php echo formatear_numero($numero1 * $numero1); ?><br>
                • Cubo: <?php echo formatear_numero($numero1 * $numero1 * $numero1); ?><br>
                • Mitad: <?php echo formatear_numero($numero1 / 2); ?><br>
                • Doble: <?php echo formatear_numero($numero1 * 2); ?><br>
                • Es par: <?php echo ($numero1 % 2 == 0) ? 'Sí ✅' : 'No ❌'; ?><br>
                • Valor absoluto: <?php echo formatear_numero(abs($numero1)); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($numero1 != 0 && $numero2 != 0 && $operacion != 'raiz'): ?>
            <div class="funcion-resultado">
                <strong>🔍 Comparación de Números:</strong><br>
                • Mayor: <?php echo formatear_numero(max($numero1, $numero2)); ?><br>
                • Menor: <?php echo formatear_numero(min($numero1, $numero2)); ?><br>
                • Promedio: <?php echo formatear_numero(($numero1 + $numero2) / 2); ?><br>
                • Diferencia: <?php echo formatear_numero(abs($numero1 - $numero2)); ?>
            </div>
            <?php endif; ?>
        </div>
        
        <!-- Historial -->
        <?php if (!empty($_SESSION['historial'])): ?>
        <div class="historial">
            <h3>📜 Historial de Operaciones</h3>
            <?php foreach ($_SESSION['historial'] as $operacion_hist): ?>
                <div class="operacion-realizada">
                    <?php echo $operacion_hist; ?>
                </div>
            <?php endforeach; ?>
            
            <form method="GET" style="margin-top: 15px;">
                <button type="submit" name="limpiar" value="1" class="limpiar-btn">
                    🗑️ Limpiar Historial
                </button>
            </form>
        </div>
        <?php endif; ?>
        
        <div style="text-align: center; margin-top: 30px; color: #666;">
            <p>🐘 <strong>Calculadora creada con PHP</strong></p>
            <p>📅 <?php echo date('d/m/Y H:i:s'); ?></p>
        </div>
    </div>
    
    <script>
        // Ocultar segundo número para raíz cuadrada
        document.addEventListener('DOMContentLoaded', function() {
            const botonesOp = document.querySelectorAll('button[name="op"]');
            const num2Input = document.getElementById('num2');
            const num2Group = num2Input.closest('.input-group');
            
            botonesOp.forEach(boton => {
                boton.addEventListener('click', function() {
                    if (this.value === 'raiz') {
                        num2Group.style.display = 'none';
                        num2Input.required = false;
                    } else {
                        num2Group.style.display = 'block';
                        num2Input.required = true;
                    }
                });
            });
        });
    </script>
</body>
</html>
