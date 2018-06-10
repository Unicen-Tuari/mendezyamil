{include file="header.tpl"}
<h1>Lista de Autos</h1>
<ul>
  {foreach from=$autos item=auto}
    <li>
      <a href="detalle/{$auto['id_auto']}">{$auto['nombre']}</a>: {$auto['modelo']}
    </li>
    {/foreach}
</ul>
{include file="footer.tpl"}
