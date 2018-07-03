{include file="header.tpl"}
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <form action="../updatemarca" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" value="{$nombre}">
        </div>
        <div class="form-group col-md-6">
          <label for="descripcion">Descripcion</label>
          <textarea name="descripcion" rows="8" cols="80">{$descripcion}</textarea>
        </div>
      </div>
      <button value="{$id_marca}" name="id_marca" type="submit" class="btn btn-primary">Editar</button>
    </form>
  </div>
</div>
{include file="footer.tpl"}
