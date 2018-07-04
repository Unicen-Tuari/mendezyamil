{include file="header.tpl"}
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <form action="../updateusuario" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" value="{$nombre}"  class="form-control">
        </div>
        <div class="form-group col-md-6">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" value="{$apellido}"  class="form-control">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="usuario">Usuario</label>
          <input type="text" name="usuario" value="{$usuario}"  class="form-control">
          </div>
          <div class="form-group col-md-3">
          <label for="password">Contraseña</label>
          <input type="text" name="password" value="{$password}"  class="form-control">
        </div>
        <div class="form-group col-md-3">
          <label for="admin">Permisos</label>
          <select name="admin" id="inputState" class="form-control"  class="form-control">
            {if ($admin==0)}
              <option value="0" selected>Usuario</option>
              <option value="1">Administrador</option>
            {else}
              <option value="0" selected>Usuario</option>
              <option value="1" selected>Administrador</option>
            {/if}
          </select>
        </div>
      </div>
      <button value="{$id_usuario}" name="id_usuario" type="submit" class="btn btn-primary">Editar</button>
    </form>
  </div>
</div>
{include file="footer.tpl"}
