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
    $admin = 0;
    session_start();
    $login = isset($_SESSION['admin']);
    //verifica si la sesion esta iniciada
    if ($login && $_SESSION['admin'] == 1){
        $admin = 1;
    }
    $this->autosView->mostrarAutos($autos, $admin, $login);
  }

  function mostrarMarcas($params = []){
    $marcas = $this->autosModel->obtenerMarcas();
    $admin = 0;
    session_start();
    $login = isset($_SESSION['admin']);
    //verifica si la sesion esta iniciada
    if ($login && $_SESSION['admin'] == 1){
        $admin = 1;
    }
    $this->autosView->mostrarMarcas($marcas, $admin, $login);
  }

  function mostrarDetalle($params = []){
    $auto = $this->autosModel->obtenerAuto($params[0]);
    $this->autosView->mostrarDetalle($auto[0]);
  }

  function crearAuto($params = []){
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
      $tipoMarca = $this->autosModel->obtenerMarcas();
      $this->autosView->mostrarCrearAuto($tipoMarca);
    }
    else {
      PageHelpers::homePageLogin();
    }
  }

  function crearMarca($params = []){
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
      $this->autosView->mostrarCrearMarca();
      PageHelpers::homePageMarcas();
    }
    else {
      PageHelpers::homePageLogin();
    }
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
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
      $this->autosModel->deleteAuto($params[0]);
      PageHelpers::homePageAutos();
    }
    else {
      PageHelpers::homePageLogin();
    }
  }

  function borrarMarca($params = []){
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
      $this->autosModel->deleteMarca($params[0]);
      PageHelpers::homePageMarcas();
    }
    else {
      PageHelpers::homePageLogin();
    }

  }

  function modificarAuto($params = []){
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
      $mostrarTupla = $this->autosModel->obtenerAuto($params[0]);
      $tipoMarca = $this->autosModel->obtenerMarcas();
      $this->autosView->mostrarModificarAuto($mostrarTupla[0],$tipoMarca);
    }
    else {
      PageHelpers::homePageLogin();
    }
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
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
      $mostrarTupla = $this->autosModel->obtenerMarca($params[0]);
      $this->autosView->mostrarModificarMarca($mostrarTupla[0]);
    }
    else {
      PageHelpers::homePageLogin();
    }
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
