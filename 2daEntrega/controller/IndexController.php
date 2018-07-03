<?php
require_once "./view/IndexView.php";
require_once "./model/IndexModel.php";

class IndexController {

  private $indexView;
  private $indexModel;

  function __construct()
  {
    $this->indexView = new IndexView();
    $this->indexModel = new IndexModel();
  }

  function mostrarIndex($params = []){
    $nombre = '';
    $admin = 0;
    session_start();
    $login = isset($_SESSION['admin']);
    //verifica si la sesion esta iniciada
    if ($login && $_SESSION['admin'] == 1){
        $admin = 1;
    }
    $this->indexView->mostrarIndex($login, $nombre, $admin);
  }
}
?>
