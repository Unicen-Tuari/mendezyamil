<?php
  DEFINE('BASEURL','//'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');
  require_once 'config.php';
  require_once "controller/AutosController.php";
  require_once "controller/LoginController.php";
  require_once "helpers/pageHelpers.php";
  // require_once "controller/LoginController.php";

  $params = explode("/", $_GET["action"]);
  $action = $params[0];
  $others = array_slice($params, 1, count($params));
  $funcion = "error";

  //Agarro el arreglo de config.php y lo separo por #
  $controlleryfuncion = explode("#", $acciones[$action]);
  $controller = $controlleryfuncion[0];
  $funcion = $controlleryfuncion[1];

  //$controller llama a la clase de dicho controlador "logincontroller, etc"
  $controllerObjeto = new $controller();
  $controllerObjeto->$funcion($others);

?>
