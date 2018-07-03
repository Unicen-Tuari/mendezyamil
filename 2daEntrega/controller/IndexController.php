<?php
require_once "./view/IndexView.php";

class IndexController {

  private $indexView;

  function __construct()
  {
    $this->indexView = new IndexView();
  }

  function mostrarIndex($params = []){
    session_start();
    $login = isset($_SESSION['admin']);
    $this->indexView->mostrarIndex($login);
  }
}
?>
