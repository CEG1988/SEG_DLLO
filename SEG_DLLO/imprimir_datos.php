<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Usuario</title>
</head>
<body>
    <h2>Datos del Usuario</h2>
    <?php
    //var_dump($_POST); // Muestra los datos recibidos del formulario para depurar
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Usuario: " . htmlspecialchars($_POST['usuario']) . "</p>";
        echo "<p>Clave: (no se muestra por razones de seguridad)</p>";
        echo "<p>Fecha de nacimiento: " . htmlspecialchars($_POST['fecha_nacimiento']) . "</p>";
        echo "<p>Género: " . ($_POST['genero'] == 'm' ? 'Masculino' : 'Femenino') . "</p>";
    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>
</body>
</html>