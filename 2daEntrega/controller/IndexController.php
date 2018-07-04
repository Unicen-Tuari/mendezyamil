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
    if ($login){
      if($_SESSION['admin'] == 1){
        $admin = 1;
      }
      $dato = $this->indexModel->obtenerNombre($_SESSION['id']);
      $nombre = $dato['nombre'];
    }
    $this->indexView->mostrarIndex($login, $nombre, $admin);
  }
}
?>
