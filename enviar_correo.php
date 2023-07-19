<?php
  // Obtener los datos del formulario
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Configurar el correo electrónico
  $to = 'alfonso.david11@gmail.com';
  $headers = "From: $name <$email>" . "\r\n";
  $message = "Nombre: $name\nCorreo electrónico: $email\nAsunto: $subject\nMensaje:\n$message";

  // Enviar el correo electrónico
  mail($to, $subject, $message, $headers);

  // Redirigir al usuario a una página de confirmación
  header('Location: confirmacion.html');
?>
