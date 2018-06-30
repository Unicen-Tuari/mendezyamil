{include file="header.tpl"}
<!-- <form action="../updatemarca" method="post">
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" value="{$nombre}">
  <label for="descripcion">Descripcion</label>
  <textarea name="descripcion" rows="8" cols="80">{$descripcion}</textarea>
  <button type="submit" value="{$id_marca}" name="id_marca">Editar</button>
</form> -->

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
{include file="footer.tpl"}
