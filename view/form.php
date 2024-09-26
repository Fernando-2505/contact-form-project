<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto Avanzado</title>
    <link rel="stylesheet" type="text/css" href="../view/Assets/css/Estilos.css">
</head>
<body>
    <div class="form-container">
        <h1>Contacto</h1>
        <form action="index.php?action=procesarFormulario" method="POST" id="contactForm">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required minlength="3">

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required pattern="\d{10}">

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required minlength="10"></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>

    <script>
        // Validación JavaScript
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            var telefono = document.getElementById('telefono').value;
            if (!/^\d{10}$/.test(telefono)) {
                alert('El número de teléfono debe tener 10 dígitos.');
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
