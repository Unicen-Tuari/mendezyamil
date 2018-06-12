{include file="header.tpl"}
<h1>Lista de Marcas</h1>
<ul>
  {foreach from=$marcas item=marca}
  <li>
    <p>{$marca['nombre']}</p> {$marca['descripcion']}
    <a href="borrarmarca/{$marca['id_marca']}">Eliminar</a>
    <a href="modificarmarca/{$marca['id_marca']}">Modificar</a>
  </li>
  {/foreach}
</ul>
<a href="crearmarca">Crear Marca</a>
{include file="footer.tpl"}
