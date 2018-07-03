<?php
require_once "./libs/Smarty.class.php";

class IndexView {
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }

  function mostrarIndex($login, $nombre){
    $this->smarty->assign('login', $login);
    $this->smarty->assign('nombre', $nombre);
    $this->smarty->display("index.tpl");
  }
}

?>
