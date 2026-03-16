<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpiar entradas
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $fecha = date("Y-m-d H:i:s");

    // Guardar en JSON
    $nuevoComentario = [
        'nombre' => $nombre,
        'email' => $email,
        'mensaje' => $mensaje,
        'fecha' => $fecha
    ];

    $rutaArchivo = 'comentarios.json';

    if (file_exists($rutaArchivo)) {
        $contenido = file_get_contents($rutaArchivo);
        $comentarios = json_decode($contenido, true);
    } else {
        $comentarios = [];
    }

    $comentarios[] = $nuevoComentario;

    file_put_contents($rutaArchivo, json_encode($comentarios, JSON_PRETTY_PRINT));

    // Enviar correo
    $para = "tucorreo@ejemplo.com";  // <-- REEMPLAZA esto con tu correo real
    $asunto = "Nuevo mensaje desde el formulario de contacto";
    $contenidoCorreo = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje\nFecha: $fecha";
    $cabeceras = "From: $email";

    mail($para, $asunto, $contenidoCorreo, $cabeceras);

    // Confirmación en pantalla
    echo "<script>alert('Mensaje enviado correctamente. ¡Gracias por contactarnos!'); window.location.href='index.html';</script>";
}
?>
