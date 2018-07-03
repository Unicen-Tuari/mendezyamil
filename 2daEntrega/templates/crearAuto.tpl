{include file="header.tpl"}
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <form id="formAuto" action="guardarauto" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" value="" class="form-control">
        </div>
        <div class="form-group col-md-6">
          <label for="modelo">Modelo</label>
          <input type="text" name="modelo" value="" class="form-control">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="color">Color</label>
          <input type="text" name="color" value="" class="form-control">
        </div>
        <div class="form-group col-md-6">
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
  </div>
</div>
{include file="footer.tpl"}
