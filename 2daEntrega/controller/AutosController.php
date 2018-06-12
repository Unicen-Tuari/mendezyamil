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

  function mostrarDetalle($params = []){
    $auto = $this->autosModel->obtenerAuto($params[0]);
    $this->autosView->mostrarDetalle($auto[0]);
  }

  function crearAuto($params = []){
    $tipoMarca = $this->autosModel->obtenerMarcas();
    $this->autosView->mostrarCrearAuto($tipoMarca);
  }

  function crearMarca($params = []){
    $this->autosView->mostrarCrearMarca();
  }

  function guardarAuto($params = []){
    $auto = [
      'nombre' => $_POST['nombre'],
      'modelo' => $_POST['modelo'],
      'color' => $_POST['color'],
      'id_marca' => $_POST['id_marca'],
    ];
    $this->autosModel->insertarAuto($auto);
    PageHelpers::homePageAutos();
  }

  function guardarMarca($params = []){
    $marca = [
      'nombre' => $_POST['nombre'],
      'descripcion' => $_POST['descripcion'],
    ];
    $this->autosModel->insertarMarca($marca);
    PageHelpers::homePageMarcas();
  }

  function borrarAuto($params = []){
    $this->autosModel->deleteAuto($params[0]);
    PageHelpers::homePageAutos();
  }

  function borrarMarca($params = []){
    $this->autosModel->deleteMarca($params[0]);
    PageHelpers::homePageMarcas();
  }

  function modificarAuto($params = []){
    $mostrarTupla = $this->autosModel->obtenerAuto($params[0]);
    $tipoMarca = $this->autosModel->obtenerMarcas();
    $this->autosView->mostrarModificarAuto($mostrarTupla[0],$tipoMarca);
  }

  function updateAuto($params = []){
    $autoModificado = [
      'id_auto' => $_POST['id_auto'],
      'nombre' => $_POST['nombre'],
      'modelo' => $_POST['modelo'],
      'color' => $_POST['color'],
      'id_marca' => $_POST['id_marca']
    ];
    $this->autosModel->updateAuto($autoModificado);
    PageHelpers::homePageAutos();
  }

  function modificarMarca($params = []){
    $mostrarTupla = $this->autosModel->obtenerMarca($params[0]);
    $this->autosView->mostrarModificarMarca($mostrarTupla[0]);
  }

  function updateMarca($params = []){
    $marcaModificada = [
      'id_marca' => $_POST['id_marca'],
      'nombre' => $_POST['nombre'],
      'descripcion' => $_POST['descripcion'],
    ];
    $this->autosModel->updateMarca($marcaModificada);
    PageHelpers::homePageMarcas();
  }
}

?>
