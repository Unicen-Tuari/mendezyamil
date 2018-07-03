<?php
require_once "./model/LoginModel.php";
require_once "./view/LoginView.php";

class LoginController {

  private $loginModel;
  private $loginView;

  function __construct(){
    $this->loginModel = new LoginModel();
    $this->loginView = new LoginView();
  }

  function login($params = [])
  {
    $this->loginView->mostrarLogin();
  }

  function logout($params = [])
  {
    session_start();
    session_destroy();
    PageHelpers::homePage();
  }

  function validarLogin($params = [])
  {
    $usuario = $this->loginModel->obtenerUsuario($_POST['usuario']);
    //verifica que el hashing de la pass coincida con lo ingresado
    if(password_verify($_POST['pass'], $usuario['password'])){
      session_start();
      //se guarda en la variable del server para almacenar los datos del usuario
      $_SESSION['usuario'] = $usuario['usuario'];
      $_SESSION['admin'] = $usuario['admin'];
      $_SESSION['id'] = $usuario['id_usuario'];
      //$_SESSION['ultima_conexion'] = time();
      PageHelpers::homePage();
    }
    else {
      PageHelpers::homePage();
    }
  }

  function crearUsuario($params = [])
  {
    $this->loginView->mostrarCrearUsuario();
  }

  function guardarusuario($params = []){
    $usuario = [
      'nombre' => $_POST['nombre'],
      'apellido' => $_POST['apellido'],
      'usuario' => $_POST['usuario'],
      'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
      'admin' => 0,
    ];
    $this->loginModel->insertarUsuario($usuario);
    PageHelpers::homePage();
  }

  function mostrarUsuarios($params = []){
    $usuarios = $this->loginModel->obtenerUsuarios();
    $admin = 0;
    session_start();
    $login = isset($_SESSION['admin']);
    //verifica si la sesion esta iniciada
    if ($login && $_SESSION['admin'] == 1){
        $admin = 1;
    }
    $this->loginView->mostrarUsuarios($usuarios, $login, $admin);
  }

  function borrarUsuario($params = []){
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
      $this->loginModel->deleteUsuario($params[0]);
      PageHelpers::homePageUsuarios();
    }
    else {
      PageHelpers::homePageLogin();
    }
  }

  function modificarUsuario($params = []){
    session_start();
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
      $mostrarTupla = $this->loginModel->obtenerUsuarioPorId($params[0]);
      $this->loginView->mostrarModificarUsuario($mostrarTupla);
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
    $this->loginModel->updateUsuario($usuarioModificado);
    PageHelpers::homePageUsuarios();
  }
}
?>
