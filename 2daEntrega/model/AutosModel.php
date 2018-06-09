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
    return $consulta->fetchAll();
  }

  function obtenerMarcas(){
    $consulta = $this->db->prepare("SELECT * FROM marca");
    $consulta->execute();
    return $consulta->fetchAll();
  }
}


?>
