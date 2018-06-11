{include file="header.tpl"}
<h1>Lista de Autos</h1>
<ul>
  {foreach from=$autos item=auto}
    <li>
      <a href="detalle/{$auto['id_auto']}">{$auto['nombre']}</a>: {$auto['modelo']}
    </li>
    {/foreach}
</ul>
<a href="crearauto">Crear Auto</a>
{include file="footer.tpl"}
