<?php

class MarcasModel{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
               .'dbname=db_autos;charset=utf8'
            , 'root', '');
  }

  function obtenerMarcas(){
    $consulta = $this->db->prepare("SELECT * FROM marca ORDER BY nombre");
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
  }

  function obtenerMarca($id_marca){
    $consulta = $this->db->prepare("SELECT * from marca where id_marca=?");
    $consulta->execute([$id_marca]);
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
  }

  function insertarMarca($marca){
    $this->db->beginTransaction();
    $consulta = $this->db->prepare("INSERT INTO marca (nombre, descripcion) VALUES (?,?)");
    $consulta->execute([$marca['nombre'], $marca['descripcion']]);
    $this->db->commit();
    return $this->db->lastInsertId();
  }

  function deleteMarca($id_marca){
    $consulta = $this->db->prepare("DELETE from marca where id_marca=?");
    $consulta->execute([$id_marca]);
  }

  function updateMarca($marca){
    $this->db->beginTransaction();
    $consulta = $this->db->prepare("UPDATE marca SET nombre=?, descripcion=? WHERE id_marca=?");
    $consulta->execute([$marca['nombre'],$marca['descripcion'],$marca['id_marca']]);
    $this->db->commit();
    return $this->db->lastInsertId();
  }
}

?>
