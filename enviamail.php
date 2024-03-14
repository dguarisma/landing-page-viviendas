<?PHP
  // form handler
  if($_POST && isset($_POST['name'], $_POST['email'])) {

    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['comment'];



	$message="Nombre: ".$nombre."\n";
	$message.="Email: ".$email."\n";
	$message.="Mensaje: ".$mensaje."\n";




      // send email and redirect
      
	  $to = "ventas@viviendastijuana.com";
      $subject = "Contacto desde el sitio web Ventas Tijuana";

	  
      $headers = "From: ventas@viviendastijuana.com" . "\r\n";
      mail($to, $subject, $message, $headers);
      mail('soporte@brandvoz.com', $subject, $message, $headers);
      //mail('manueltrigojr@gmail.com', $subject, $message, $headers);
      header("Location: gracias.html");
      exit;
  }
?>