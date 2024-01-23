<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombreArchivo = $_POST['nombre_archivo'];

            // Verificar si el archivo ya existe
            $rutaArchivo = 'archivos_creados/' . $nombreArchivo . '.php';
            if (file_exists($rutaArchivo)) {
                // Mostrar mensaje de error en un pop-up y redirigir al formulario
                echo '<script>
                    alert("El archivo \'' . $nombreArchivo . '\' ya existe. Por favor, elige otro nombre.");
                    window.location.href = "word.php";
                </script>';
                exit;
            } else {
                // Obtener los datos del formulario
            $nombreArchivo = $_POST['nombre_archivo'];
            $titulo = $_POST['titulo'];
            $contenido = $_POST['contenido'];
            $urlImagen = $_POST['url_imagen'];

            // Generar el contenido del archivo PHP
            $contenidoArchivo = "
<?php require('../layouts/head.php') ?>
    <title>Inby ❤ - $nombreArchivo </title>
<?php require('../layouts/headerwordarchivo.php') ?>

    <?php require('../layouts/headerwordheader.php') ?>
    <section class='wordarchive detector'>
        <h1>$titulo</h1>
        <p>$contenido</p=>
        <img src=\"$urlImagen\">
    </section>
    <?php require('../layouts/scripts.php') ?>
</body>
</html>
            ";

            // Ruta y nombre del archivo a crear
            $rutaArchivo = 'archivos_creados/' . $nombreArchivo . '.php';

            // Crear el archivo y escribir el contenido
            if (file_put_contents($rutaArchivo, $contenidoArchivo) !== false) {
                // Redireccionar a la página inicial con el nombre del archivo creado como parámetro en la URL
                header("Location: word.php?archivo_creado=$nombreArchivo");
                exit();
            } else {
                echo "Error al crear el archivo.";
            }
        }
    }
?>