<?php
$archivoJSON = '../../../completedLogros.json';

// Verificar si el archivo JSON existe
if (!file_exists($archivoJSON)) {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'El archivo JSON no existe.']);
    exit;
}

// Leer el contenido actual del archivo JSON
$contenidoActual = file_get_contents($archivoJSON);

// Decodificar el JSON existente o inicializar un array vacío si está vacío o no es válido
$completedLogros = json_decode($contenidoActual, true) ?? [];

// Obtener el contenido del cuerpo de la solicitud POST
$inputJSON = file_get_contents('php://input');
$inputData = json_decode($inputJSON, true);

// Actualizar el array de logros completados
foreach ($inputData as $category => $logros) {
    foreach ($logros as $logro => $completados) {
        if ($category === 'Todo') {
            // Si la categoría es "Todo", actualiza solo en las categorías existentes
            foreach ($completedLogros as $existingCategory => $existingLogros) {
                if (isset($completedLogros[$existingCategory][$logro])) {
                    // Actualiza el valor en la categoría existente
                    $completedLogros[$existingCategory][$logro] = [$completados[0]];
                }
            }
        } else {
            // Si no es "Todo", actualiza solo en la categoría especificada
            $completedLogros[$category][$logro] = [$completados[0]];
        }
    }
}

// Convertir el array a JSON
$contenidoNuevo = json_encode($completedLogros, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Escribir el contenido actualizado en el archivo
if (file_put_contents($archivoJSON, $contenidoNuevo) === false) {
    header('Content-Type: application/json');
    echo json_encode(['status' => 'error', 'message' => 'Error al escribir en el archivo.']);
    exit;
}

// Enviar una respuesta exitosa
header('Content-Type: application/json');
echo json_encode(['status' => 'success']);
?>