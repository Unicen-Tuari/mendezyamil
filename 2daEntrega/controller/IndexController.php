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
    session_start();
    $login = isset($_SESSION['admin']);
    // if ($login){
    //   $usuario = $_POST['usuario'];
    //   $nombre = $this->indexModel->obtenerNombre($usuario);
    // }
    $this->indexView->mostrarIndex($login, $nombre);
  }
}
?>
