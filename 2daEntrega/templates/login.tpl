{include file="header.tpl"}
<form action="loginvalidar" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre de usuario</label>
    <input name="usuario" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
  <a class="nav-link" href="registrar">Registrarse.</a>
</form>
{include file="footer.tpl"}
