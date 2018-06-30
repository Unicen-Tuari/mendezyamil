{include file="header.tpl"}
<h1>Lista de Marcas</h1>
<!-- <ul>
  {foreach from=$marcas item=marca}
  <li>
    <p>{$marca['nombre']}</p> {$marca['descripcion']}
    <a href="borrarmarca/{$marca['id_marca']}">Eliminar</a>
    <a href="modificarmarca/{$marca['id_marca']}">Modificar</a>
  </li>
  {/foreach}
</ul> -->
<a id="crearmarca" href="crearmarca" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Crear Marca</a>

<ul class="list-group">
  {foreach from=$marcas item=marca}
    <li>
      <div>
        <h4 class="list-group-item">{$marca['nombre']}</h4>
        <p>{$marca['descripcion']}</p>
        <a id="modificar" href="modificarmarca/{$marca['id_marca']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modificar</a>
        <a id="eliminar" href="borrarmarca/{$marca['id_marca']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Eliminar</a>
      </div>
    </li>
  {/foreach}
</ul>
{include file="footer.tpl"}
