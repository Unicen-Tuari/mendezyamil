{include file="header.tpl"}
<form action="guardarauto" method="post">
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
</form>
{include file="footer.tpl"}
