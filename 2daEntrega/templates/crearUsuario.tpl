{include file="header.tpl"}
<form id="formUsuario" action="guardarusuario" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value="">
    </div>
    <div class="form-group col-md-6">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" value="">
    </div>
    <div class="form-group">
      <label for="usuario">Nombre de usuario</label>
      <input type="text" name="usuario" value="">
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" name="password" value="">
    </div>
  </div>
  <button name="button" type="submit" class="btn btn-primary">Registrarse</button>
</form>
{include file="footer.tpl"}
