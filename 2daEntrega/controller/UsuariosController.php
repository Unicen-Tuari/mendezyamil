<?php
require_once "./model/UsuariosModel.php";
require_once "./view/UsuariosView.php";

class UsuariosController {

  private $usuariosModel;
  private $usuariosView;

  function __construct(){
    $this->usuariosModel = new UsuariosModel();
    $this->usuariosView = new UsuariosView();
  }

  function crearUsuario($params = [])
  {
    $this->usuariosView->mostrarCrearUsuario();
  }

  function guardarusuario($params = []){
    $usuario = [
      'nombre' => $_POST['nombre'],
      'apellido' => $_POST['apellido'],
      'usuario' => $_POST['usuario'],
      'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
      'admin' => 0,
    ];
    $this->usuariosModel->insertarUsuario($usuario);
    PageHelpers::homePage();
  }

  function mostrarUsuarios($params = []){
    $usuarios = $this->usuariosModel->obtenerUsuarios();
    $admin = 0;
    session_start();
    $login = isset($_SESSION['admin']);
    //verifica si la sesion esta iniciada
    if ($login && $_SESSION['admin'] == 1){
        $admin = 1;
        $this->usuariosView->mostrarUsuarios($usuarios, $login, $admin);
    }
    else {
      PageHelpers::homePageLogin();
    }
  }

  function borrarUsuario($params = []){
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
      $this->usuariosModel->deleteUsuario($params[0]);
      PageHelpers::homePageUsuarios();
    }
    else {
      PageHelpers::homePageLogin();
    }
  }

  function modificarUsuario($params = []){
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
      $mostrarTupla = $this->usuariosModel->obtenerUsuarioPorId($params[0]);
      $this->usuariosView->mostrarModificarUsuario($mostrarTupla);
    }
    else {
      PageHelpers::homePageLogin();
    }
  }

  function updateUsuario($params = []){
    $usuarioModificado = [
      'id_usuario' => $_POST['id_usuario'],
      'nombre' => $_POST['nombre'],
      'apellido' => $_POST['apellido'],
      'usuario' => $_POST['usuario'],
      'password' => $_POST['password'],
      'admin' => $_POST['admin']
    ];
    $this->usuariosModel->updateUsuario($usuarioModificado);
    PageHelpers::homePageUsuarios();
  }
}
?>
