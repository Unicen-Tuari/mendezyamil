<?php
class LoginModel{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
               .'dbname=db_autos;charset=utf8'
            , 'root', '');
  }

  function obtenerUsuario($usuario){
    $consulta = $this->db->prepare("SELECT * FROM usuario where usuario=? LIMIT 1");
    $consulta->execute([$usuario]);
    return $consulta->fetch(PDO::FETCH_ASSOC);
  }

  function insertarUsuario($usuario){
    $this->db->beginTransaction();
    $consulta = $this->db->prepare("INSERT INTO usuario (nombre, apellido, usuario, password, admin) VALUES (?,?,?,?,?)");
    $consulta->execute([$usuario['nombre'], $usuario['apellido'], $usuario['usuario'], $usuario['password'], $usuario['admin']]);
    $this->db->commit();
    return $this->db->lastInsertId();
  }
}
?>
