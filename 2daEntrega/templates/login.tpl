{include file="header.tpl"}
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <form action="loginvalidar" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre de usuario</label>
        <input name="usuario" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar usuario">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
      </div>
      <div class="form-row">
        <div class="form-group col-md-1">
          <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
        <div class="form-group col-md-1">
          <a class="nav-link" href="registrar">Registrarse.</a>
        </div>
      </div>
    </form>
  </div>
</div>
{include file="footer.tpl"}
