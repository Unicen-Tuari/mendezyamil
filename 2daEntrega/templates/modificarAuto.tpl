{include file="header.tpl"}
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <form action="../updateauto" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" value="{$nombre}">
        </div>
        <div class="form-group col-md-6">
          <label for="modelo">Modelo</label>
          <input type="text" name="modelo" value="{$modelo}">
        </div>
        <div class="form-group">
          <label for="color">Color</label>
          <input type="text" name="color" value="{$color}">
        </div>
        <div class="form-group col-md-4">
          <label for="marca">Marca</label>
          <select name="id_marca" id="inputState" class="form-control">
            {foreach from=$tipoMarcas item=$marca}
              {if ($marca['id_marca']==$id_marca)}
                <option value="{$marca['id_marca']}" selected>{$marca['nombre']}</option>
              {else}
                <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
              {/if}
            {/foreach}
          </select>
        </div>
      </div>
      <button value="{$id_auto}" name="id_auto" type="submit" class="btn btn-primary">Editar</button>
    </form>
  </div>
</div>
{include file="footer.tpl"}
