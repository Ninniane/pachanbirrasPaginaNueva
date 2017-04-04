<?php 

// define variables and set to empty values
$name_error = $email_error = $message_error = "";
$name = $email = $message = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error = "El campo Nombre es obligatorio";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed"; 
    }
  }

   if (empty($_POST["message"])) {
    $message_error = "El campo Mensaje es obligatorio";
  } else {
    $message = test_input($_POST["message"]);
  }
  
  if ($name_error == '' and $message_error == ''){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
  
      $to = 'soylajefa@gmail.com';
      $subject = 'Web Pachanbirras Ortiz';
      $contenido = "Nombre: " . $name . "\nCorreo: " . $email . "\nAsunto: " . $message;
      if (mail($to, $subject, $contenido)){
          $success = "Mensaje enviado, gracias por las sugerencias";
          $name = $email = $message = '';
      }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}