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

  function obtenerMarca($id_marca){
    $consulta = $this->db->prepare("SELECT * from marca where id_marca=?");
    $consulta->execute([$id_marca]);
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

  function deleteAuto($id_auto){
    $consulta = $this->db->prepare("DELETE from auto where id_auto=?");
    $consulta->execute([$id_auto]);
  }

  function deleteMarca($id_marca){
    $consulta = $this->db->prepare("DELETE from marca where id_marca=?");
    $consulta->execute([$id_marca]);
  }

  function updateAuto($auto){
    $this->db->beginTransaction();
    $consulta = $this->db->prepare("UPDATE auto SET nombre=?, modelo=?, color=?, id_marca=? WHERE id_auto=?");
    $consulta->execute([$auto['nombre'],$auto['modelo'],$auto['color'], $auto['id_marca'], $auto['id_auto']]);
    $this->db->commit();
    return $this->db->lastInsertId();
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
