<?php
 $destino="brianiaf383@gmail.com"
 $nombre = $_POST["nombre"]
 $Correo = $_POST["Correo"]
 $telefono = $_POST["telefono"]
 $mensaje = $_POST["mensaje"]
 $contenido = . $nombre "\nNombre: " . "\nCorreo: " . $Correo . "\nTelefono: " . $telefono . "\nMensajes: " $mensaje;
 mail($destino, "Contacto", $contenido)
 header("Location:gracias.html");
?>