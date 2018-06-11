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
    //FETCH_ASSOC es para que el arreglo sea solamente asociativo y no hibrido
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

  function insertarAuto($auto){
    $this->db->beginTransaction();
    $consulta = $this->db->prepare("INSERT INTO auto (nombre, modelo, color, id_marca) VALUES (?,?,?,?)");
    $consulta->execute([$auto['nombre'], $auto['modelo'], $auto['color'], $auto['id_marca']]);
    $this->db->commit();
    return $this->db->lastInsertId();
  }

  function insertarMarca($marca){
    $this->db->beginTransaction();
    $consulta = $this->db->prepare("INSERT INTO marca (nombre, descripcion) VALUES (?,?)");
    $consulta->execute([$marca['nombre'], $marca['descripcion']]);
    $this->db->commit();
    return $this->db->lastInsertId();
  }
}


?>
