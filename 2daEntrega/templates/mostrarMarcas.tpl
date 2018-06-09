{include file="header.tpl"}
<h1>Lista de Marcas</h1>
<ul>
  {foreach from=$marcas item=marca}
  <li>
    <a href="detalle/{$marcas['id_marca']}">{$marca['nombre']}</a>: {$marca['descripcion']}
  </li>
  {/foreach}
</ul>
{include file="footer.tpl"}
