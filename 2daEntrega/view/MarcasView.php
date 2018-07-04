<?php
require_once "./libs/Smarty.class.php";

class MarcasView{

  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrarMarcas($marcas, $admin, $login){
    $this->smarty->assign('login', $login);
    $this->smarty->assign('admin', $admin);
    $this->smarty->assign("marcas", $marcas);
    $this->smarty->display("mostrarMarcas.tpl");
  }

  function mostrarCrearMarca(){
    $this->smarty->display("crearMarca.tpl");
  }

  function mostrarModificarMarca($marcas){
    $this->smarty->assign("id_marca", $marcas['id_marca']);
    $this->smarty->assign("nombre", $marcas['nombre']);
    $this->smarty->assign("descripcion", $marcas['descripcion']);
    $this->smarty->display("modificarMarca.tpl");
  }
}

?>
