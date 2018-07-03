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
}

?>
