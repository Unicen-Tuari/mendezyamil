{include file="header.tpl"}
<h1>Lista de Marcas</h1>
<ul>
  {foreach from=$marcas item=marca}
  <li>
    <p>{$marca['nombre']}</p> {$marca['descripcion']}
  </li>
  {/foreach}
</ul>
{include file="footer.tpl"}
