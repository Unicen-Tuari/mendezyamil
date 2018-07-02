<?php
require_once "./libs/Smarty.class.php";

class IndexView {
  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }

  function mostrarIndex(){
    $this->smarty->display("index.tpl");
  }
}

?>
