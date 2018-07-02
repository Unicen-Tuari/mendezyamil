<?php
require_once "./view/IndexView.php";

class IndexController {

  private $indexView;

  function __construct()
  {
    $this->indexView = new IndexView();
  }

  function mostrarIndex($params = []){
    $this->indexView->mostrarIndex();
  }
} 
?>
