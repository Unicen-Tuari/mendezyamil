<?php
require_once "./libs/Smarty.class.php";

class IndexView {
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }

  function mostrarIndex($login, $nombre, $admin){
    $this->smarty->assign('login', $login);
    $this->smarty->assign('admin', $admin);
    $this->smarty->assign('nombre', $nombre);
    $this->smarty->display("index.tpl");
  }
}

?>
