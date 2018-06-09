<?php
require_once "./libs/Smarty.class.php";

class AutosView{

  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrarAutos($autos){
    $this->smarty->assign("autos", $autos);
    $this->smarty->display("mostrarAutos.tpl");
  }

  function mostrarMarcas($marcas){
    $this->smarty->assign("marcas", $marcas);
    $this->smarty->display("mostrarMarcas.tpl");
  }
}

?>