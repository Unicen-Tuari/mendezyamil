<?php
class IndexModel{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
               .'dbname=db_autos;charset=utf8'
            , 'root', '');
  }

  function obtenerNombre($usuario){
    $consulta = $this->db->prepare("SELECT nombre FROM usuario where usuario=? LIMIT 1");
    $consulta->execute([$usuario]);
    return $consulta->fetch(PDO::FETCH_ASSOC);
  }
}
?>
