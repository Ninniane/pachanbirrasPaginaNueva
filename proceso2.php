$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/html";
    
$body= "Mensaje enviado por: " . $nombre . "\r\n";
$body .= "Email: " . $email. "\r\n";
$body .= "Mensaje: " . $mensaje . " \r\n" . "\r\n";
$body .= "\r\n";
$body .= "                      Desde: pachanbirras.000webhostapp.com";
$body .= "\r\n";
    
$para = "alemarmol89@gmail.com";
    
mail($para, $asunto, utf8_decode($body), $header);