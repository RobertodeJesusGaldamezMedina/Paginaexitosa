<?php
  session_start();
  if(isset($_SESSION['nombreUsuario'])){
    $usuarioSesion=$_SESSION['nombreUsuario'];
    $contraseñaSesion=$_SESSION['contraseñaUsuario'];
  }
  else{
    if ($usuarioSesion =="" && $contraseñaSesion =="") {
        header("Location: ../index.php");
    }
  }

?>