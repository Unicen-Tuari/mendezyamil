<?php

$acciones = [
  "" => "IndexController#mostrarIndex",
  "login" => "LoginController#login",
  "loginvalidar" => "LoginController#validarLogin",
  "logout" => "LoginController#logout",
  "registrar" => "LoginController#crearUsuario",
  "guardarusuario" => "LoginController#guardarUsuario",
  "verautos" => "AutosController#mostrarAutos",
  "vermarcas" => "AutosController#mostrarMarcas",
  "crearauto" => "AutosController#crearAuto",
  "crearmarca" => "AutosController#crearMarca",
  "guardarauto" => "AutosController#guardarAuto",
  "guardarmarca" => "AutosController#guardarMarca",
  "borrar" => "AutosController#borrarAuto",
  "borrarmarca" => "AutosController#borrarMarca",
  "detalle" => "AutosController#mostrarDetalle",
  "modificarmarca" => "AutosController#modificarMarca",
  "modificarauto" => "AutosController#modificarAuto",
  "updateauto" => "AutosController#updateAuto",
  "updatemarca" => "AutosController#updateMarca"
];
?>
