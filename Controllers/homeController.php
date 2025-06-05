<?php

include_once $_SERVER["DOCUMENT_ROOT"] . '/Clase/Models/homeModel.php';

//Loguear

if(isset($_POST["btnIniciarSesion"]))
{
    $nombreUsuario = $_POST["txtNombreUsuario"];
    $contrasenna = $_POST["txtContrasenna"];

  $respuesta = ValidarInicioSesionModel($nombreUsuario, $contrasenna );

  if($respuesta)
  {
    header("location: ../../Views/Home/principal.php");
  }
  else {
    $_POST["txtMensaje"] = "Su informacion no es validada correctamente :(";
  }

}

//Registrar

if(isset($_POST["btnRegistrarUsuario"]))
{
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $nombreUsuario = $_POST["txtNombreUsuario"];
    $contrasenna = $_POST["txtContrasenna"];

  $respuesta = RegistrarUsuarioModel($nombre, $correo, $nombreUsuario, $contrasenna );

  if($respuesta)
  {
    header("location: ../../Views/Home/login.php");
  }
  else {
    $_POST["txtMensaje"] = "Su informacion no fue registrada correctamente :(";
  }

}


//Recuperar Acceso



?>