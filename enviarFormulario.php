<?php
// Verificar que se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recoger los datos del formulario
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $telefono = $_POST['phone'];
  $mensaje = $_POST['message'];

  // Dirección de correo electrónico a la que se enviará el mensaje
  $to = "mnaiara2202@gmail.com";  // Aquí pon tu dirección de correo

  // Asunto del correo
  $subject = "Nuevo mensaje de contacto desde tu landing page";

  // Cuerpo del correo
  $body = "Nombre: $nombre\n";
  $body .= "Correo electrónico: $email\n";
  $body .= "Teléfono: $telefono\n";
  $body .= "Mensaje:\n$mensaje\n";

  // Encabezados del correo
  $headers = "From: $email\n";
  $headers .= "Reply-To: $email\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\n";

  // Enviar el correo
  if (mail($to, $subject, $body, $headers)) {
    echo "Gracias por tu mensaje. Te responderemos pronto.";
  } else {
    echo "Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente.";
  }
}
?>
