<?php
require_once "./libs/Smarty.class.php";

class AutosView{

  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrarAutos($autos, $admin, $login){
    $this->smarty->assign('login', $login);
    $this->smarty->assign('admin', $admin);
    $this->smarty->assign("autos", $autos);
    $this->smarty->display("mostrarAutos.tpl");
  }

  function mostrarMarcas($marcas, $admin, $login){
    $this->smarty->assign('login', $login);
    $this->smarty->assign('admin', $admin);
    $this->smarty->assign("marcas", $marcas);
    $this->smarty->display("mostrarMarcas.tpl");
  }

  function mostrarDetalle($auto){
    $this->smarty->assign("nombre", $auto['nombre']);
    $this->smarty->assign("modelo", $auto['modelo']);
    $this->smarty->assign("color", $auto['color']);
    $this->smarty->assign("id_marca", $auto['id_marca']);
    $this->smarty->display("mostrarDetalle.tpl");
  }

  function mostrarCrearAuto($tipoMarcas){
    $this->smarty->assign("tipoMarcas", $tipoMarcas);
    $this->smarty->display("crearAuto.tpl");
  }

  function mostrarCrearMarca(){
    $this->smarty->display("crearMarca.tpl");
  }

  function mostrarModificarAuto($auto, $tipoMarcas){
    $this->smarty->assign("tipoMarcas", $tipoMarcas);
    $this->smarty->assign("id_auto", $auto['id_auto']);
    $this->smarty->assign("nombre", $auto['nombre']);
    $this->smarty->assign("modelo", $auto['modelo']);
    $this->smarty->assign("color", $auto['color']);
    $this->smarty->assign("id_marca", $auto['id_marca']);
    $this->smarty->display("modificarAuto.tpl");
  }

  function mostrarModificarMarca($marcas){
    $this->smarty->assign("id_marca", $marcas['id_marca']);
    $this->smarty->assign("nombre", $marcas['nombre']);
    $this->smarty->assign("descripcion", $marcas['descripcion']);
    $this->smarty->display("modificarMarca.tpl");
  }
}

?>
