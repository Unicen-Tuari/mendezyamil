{include file="header.tpl"}
<!-- <form action="guardarauto" method="post">
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" value="">
  <label for="modelo">Modelo</label>
  <input type="text" name="modelo" value="">
  <label for="color">Color</label>
  <input type="text" name="color" value="">
  <label for="marca">Marca</label>
  <select name="id_marca">
    {foreach from=$tipoMarcas item=$marca}
    <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
    {/foreach}
  </select>
  <button type="submit" name="button">Crear</button>
</form> -->

<form id="formAuto" action="guardarauto" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value="">
    </div>
    <div class="form-group col-md-6">
      <label for="modelo">Modelo</label>
      <input type="text" name="modelo" value="">
    </div>
    <div class="form-group">
      <label for="color">Color</label>
      <input type="text" name="color" value="">
    </div>
    <div class="form-group col-md-4">
      <label for="marca">Marca</label>
      <select name="id_marca" id="inputState" class="form-control">
        {foreach from=$tipoMarcas item=$marca}
        <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
        {/foreach}
      </select>
    </div>
  </div>
  <button name="button" type="submit" class="btn btn-primary">Crear</button>
</form>
{include file="footer.tpl"}
