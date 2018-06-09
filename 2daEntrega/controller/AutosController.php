<?php
require_once "./model/AutosModel.php";
require_once "./view/AutosView.php";

class AutosController {

  private $autosModel;
  private $autosView;

  function __construct()
  {
    $this->autosModel = new AutosModel();
    $this->autosView = new AutosView();
  }

  function mostrarAutos($params = []){
    $autos = $this->autosModel->obtenerAutos();
    $this->autosView->mostrarAutos($autos);
  }

  function mostrarMarcas($params = []){
    $marcas = $this->autosModel->obtenerMarcas();
    $this->autosView->mostrarMarcas($marcas);
  }

  // function mostrarDetalle($params = []){
  //   $auto = $this->autosModel->obtenerAuto($params[0]);
  //   $this->autosView->mostrarDetalle($auto);
  // }
}

?>
