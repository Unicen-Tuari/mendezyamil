{include file="header.tpl"}
<form action="../updateauto" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{$nombre}">
    <label for="modelo">Modelo</label>
    <input type="text" name="modelo" value="{$modelo}">
    <label for="color">Color</label>
    <input type="text" name="color" value="{$color}">
    <label for="marca">Marca</label>
    <select name="id_marca">
      {foreach from=$tipoMarcas item=$marca}
      {if ($marca['id_marca']==$id_marca)}
        <option value="{$marca['id_marca']}" selected>{$marca['nombre']}</option>
      {else}
        <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
      {/if}
      {/foreach}
    </select>
  <button type="submit" value="{$id_auto}" name="id_auto">Editar</button>
{include file="footer.tpl"}
