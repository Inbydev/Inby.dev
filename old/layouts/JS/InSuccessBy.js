document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.querySelector('input[name="activarNumeros"]');
    const inputNumeros = document.querySelector('input[name="repeticiones"]');
    const toggleButton = document.getElementById('toggleButton');
    const toggleContainer = document.getElementById('toggle_container');
    const not_a = document.querySelectorAll('.not_a');

    let completedLogros = {};

    checkbox.addEventListener('change', function () {
        inputNumeros.disabled = !checkbox.checked;
        if (checkbox.checked) {
            inputNumeros.setAttribute('min', '2');
        } else {
            inputNumeros.removeAttribute('min');
        }
    });

    toggleButton.addEventListener('click', function () {
        toggleContainer.classList.toggle('hide');
    });

    function handleDoubleClick(event) {
        event.preventDefault();
        const logrosBox = event.currentTarget;
        logrosBox.classList.toggle('complete');

        // Obtener el nombre del archivo del logro
        const nombreArchivo = logrosBox.innerText.trim();

        // Obtener la categoría actual desde los parámetros de la URL
        const urlParams = new URLSearchParams(window.location.search);
        const selectedCategory = urlParams.get('categoria') || 'Todo';

        // Inicializar la estructura de completedLogros si es necesario
        completedLogros[selectedCategory] = completedLogros[selectedCategory] || {};

        // Inicializar el array para el logro si es necesario
        completedLogros[selectedCategory][nombreArchivo] = completedLogros[selectedCategory][nombreArchivo] || [];

        // Actualizar el estado del logro específico
        const isComplete = logrosBox.classList.contains('complete');
        if (selectedCategory === 'Todo') {
            // Si la categoría es "Todo", actualiza en todas las categorías
            for (const category in completedLogros) {
                completedLogros[category][nombreArchivo] = [isComplete];
            }
        } else {
            // Si no es "Todo", actualiza solo en la categoría especificada
            completedLogros[selectedCategory][nombreArchivo] = [isComplete];
        }
        
        // Enviar la actualización al servidor
        fetch('layouts/PHP/InSuccessBy/update.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(completedLogros)
        })
        .then(response => response.json())
        .then(responseData => {
            // Puedes agregar lógica adicional aquí si es necesario
            console.log(responseData);
        })
        .catch(error => console.error('Error:', error));
    }

    // Agregar el evento de doble clic a los elementos <a> con la clase logros_box
    const logrosBoxElements = document.querySelectorAll('.logros_box');
    logrosBoxElements.forEach(function (element) {
        element.addEventListener('dblclick', handleDoubleClick);
        element.href = "javascript:void(0)";
    });
});