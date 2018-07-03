<?php
require_once "./libs/Smarty.class.php";

class LoginView {
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }

  function mostrarLogin(){
    $this->smarty->display("login.tpl");
  }

  function mostrarUsuarios($usuarios, $login, $admin){
    $this->smarty->assign('login', $login);
    $this->smarty->assign('admin', $admin);
    $this->smarty->assign("usuarios", $usuarios);
    $this->smarty->display("mostrarUsuarios.tpl");
  }

  function mostrarCrearUsuario(){
    $this->smarty->display("crearUsuario.tpl");
  }

  function mostrarModificarUsuario($usuario){
    $this->smarty->assign("id_usuario", $usuario['id_usuario']);
    $this->smarty->assign("nombre", $usuario['nombre']);
    $this->smarty->assign("apellido", $usuario['apellido']);
    $this->smarty->assign("usuario", $usuario['usuario']);
    $this->smarty->assign("password", $usuario['password']);
    $this->smarty->assign("admin", $usuario['admin']);
    $this->smarty->display("modificarUsuario.tpl");
  }
}

?>
