<?php

 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $correo = $_POST['correoele'];
 $asunto = $_POST['asunto'];
 $mensaje = $_POST['mensaje'];

 $mensajeglobal = "<h1>Mensaje enviado desde el sitio web <br>".
                  "Nombre del remitente: $nombre".
                  "Apellidos del remitente: $apellidos".
                  "Mensaje enviado: $mensajeglobal";
                  

$url= 'respuesta.php'
 //mensaje: to, subject, message
 mail($correo, $asunto, $mensaje);

 if(mail($correo, $asunto, $mensajeglobal)){

    header('Location:='.$url);
 }else{
    echo "El mensaje no se envio";

 }

?>