<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Función para crear un nuevo logro
    function crearLogro($titulo, $descripcion, $categoria, $repeticiones) {
        $archivoLogro = fopen("../../../categorizaciones/$categoria/$titulo.php", "w");
        fwrite($archivoLogro,
"<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <title>Logro - $titulo</title>
    </head>
    <body>
        <h1>$titulo</h1>
        <h2>Descripción</h2>
        <p>$descripcion</p>
        <h2>Categoria: $categoria</h2>
        <h3>Repeticiones: $repeticiones</h3>
        <button>Logro Completado?</button>
    </body>
        ");
        fclose($archivoLogro);
    }

    // Función para crear una nueva categorización (carpeta)
    function crearCategoria($nombreCategoria) {
        $rutaCategoria = "../../../categorizaciones/$nombreCategoria";
        if (!file_exists($rutaCategoria)) {
            mkdir($rutaCategoria);
        }
    }

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];

    if (!empty($_POST['nuevaCategoria'])) {
        $nuevaCategoria = $_POST['nuevaCategoria'];
        crearCategoria($nuevaCategoria);
        $categoria = $nuevaCategoria;
    }

    $repeticiones = isset($_POST['activarNumeros']) ? $_POST['repeticiones'] : 1;

    // Crear el logro
    crearLogro($titulo, $descripcion, $categoria, $repeticiones);

    // Obtener el contenido actual del archivo JSON de logros completados
    $archivoJSON = '../../../completedLogros.json';
    $contenidoJSON = file_get_contents($archivoJSON);

    // Decodificar el contenido JSON en un array asociativo
    $completedLogros = json_decode($contenidoJSON, true) ?? [];

    // Añadir el nuevo logro con un estado falso
    $completedLogros[$categoria][$titulo] = [false];

    // Codificar el array actualizado a formato JSON
    $contenidoNuevo = json_encode($completedLogros, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    // Escribir el contenido JSON actualizado de vuelta al archivo
    file_put_contents($archivoJSON, $contenidoNuevo);

    // Limpiar formulario después de crear logro
    header("Location: ../../../InSuccessBy.php?categoria=$categoria");
}
?>
