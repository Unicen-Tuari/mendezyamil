<?php

class AutosModel{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
               .'dbname=db_autos;charset=utf8'
            , 'root', '');
  }

  function obtenerAutos(){
    $consulta = $this->db->prepare("SELECT * FROM auto");
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
  }

  function obtenerMarcas(){
    $consulta = $this->db->prepare("SELECT * FROM marca");
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
  }

  function obtenerAuto($id_auto){
    $consulta = $this->db->prepare("SELECT * from auto where id_auto=?");
    $consulta->execute([$id_auto]);
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
  }
}


?>
