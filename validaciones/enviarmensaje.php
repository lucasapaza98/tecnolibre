<?php

// Llamando a los campos

$nombre = $_POST['nombre'];
$correo = $_POST ['correo'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "apelukavc04@gmail.com";
$asunto = "Gracias por la compra";


$carta = "De: $nombre \n";
$carta .= "De: $correo \n";
$carta .= "De: $mensaje \n";

//Enviando mensaje.....

mail($destinatario , $asunto , $carta);
header("Location: ../ayudadestinoexitoso.php");



?>