<?php

$destinatario = 'prueba@centrotyo.com';

$nombre =  $_POST['nombre'];
$email =  $_POST['email'];
$asunto =  $_POST['asunto'];
$mensajes =  $_POST['mensajes'];

$header =  "envio de correo de prueba ";
$mensajeCompleto  = $mensajes . "\n Atentamente : " . $nombre;

mail($destinatario,$asunto,$mensajeCompleto,$header);

echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.php'\",1000) </script>";


?>