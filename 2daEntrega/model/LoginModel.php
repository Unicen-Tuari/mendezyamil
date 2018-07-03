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

  function obtenerUsuarioPorId($usuario){
    $consulta = $this->db->prepare("SELECT * FROM usuario where id_usuario=? LIMIT 1");
    $consulta->execute([$usuario]);
    return $consulta->fetch(PDO::FETCH_ASSOC);
  }

  function obtenerUsuarios(){
    $consulta = $this->db->prepare("SELECT * FROM usuario");
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
  }

  function insertarUsuario($usuario){
    $this->db->beginTransaction();
    $consulta = $this->db->prepare("INSERT INTO usuario (nombre, apellido, usuario, password, admin) VALUES (?,?,?,?,?)");
    $consulta->execute([$usuario['nombre'], $usuario['apellido'], $usuario['usuario'], $usuario['password'], $usuario['admin']]);
    $this->db->commit();
    return $this->db->lastInsertId();
  }

  function deleteUsuario($id_usuario){
    $consulta = $this->db->prepare("DELETE from usuario where id_usuario=?");
    $consulta->execute([$id_usuario]);
  }

  function updateUsuario($usuarioModificado){
    $this->db->beginTransaction();
    $consulta = $this->db->prepare("UPDATE usuario SET nombre=?, apellido=?, usuario=?, password=?, admin=? WHERE id_usuario=?");
    $consulta->execute([$usuarioModificado['nombre'],$usuarioModificado['apellido'],$usuarioModificado['usuario'], $usuarioModificado['password'], $usuarioModificado['admin'], $usuarioModificado['id_usuario']]);
    $this->db->commit();
    return $this->db->lastInsertId();
  }
}
?>
