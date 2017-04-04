<?php

$destino = "soylajefa@gmail.com";
$nombre = $_POST["name"];
$correo = $_POST["email"];
$asunto = $_POST["message"];


$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto;
mail($destino,"Contacto Pachanbirras", $contenido);
header("Location:contacto.html");



?>