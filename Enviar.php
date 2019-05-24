<?php
  $destino="kristhenpino12@gmail.com";
  $NOMBRE = $_POST["NOMBRE"];
  $CORREO = $_POST["CORREO"];
  $TELEFONO = $_POST["TELEFONO"];
  $Mensaje = $_POST["mensaje"];
  $contenido = "Nombre: " . $NOMBRE ."\nCorreo" .$CORREO. "\nTelefono".$TELEFONO. "\nMensaje: . $mensaje";
  mail($destino,"Contacto",$contenido);
  header("Location:gracias.html");
?>