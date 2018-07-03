<?php
require_once "./libs/Smarty.class.php";

class IndexView {
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }

  function mostrarIndex($login){
    $this->smarty->assign('login', $login);
    $this->smarty->display("index.tpl");
  }
}

?>
