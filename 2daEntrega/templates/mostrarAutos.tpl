{include file="header.tpl"}
<h1>Lista de Autos</h1>
<!-- <ul>
  {foreach from=$autos item=auto}
    <li>
      <a href="detalle/{$auto['id_auto']}">{$auto['nombre']}</a>: {$auto['modelo']}
      <a href="borrar/{$auto['id_auto']}">Eliminar</a>
      <a href="modificarauto/{$auto['id_auto']}">Modificar</a>
    </li>
    {/foreach}
</ul> -->
{if ($admin == 1)}
  <a id="crearAuto" href="crearauto" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Crear Auto</a>
{/if}
{if !$login}
  <a id="mostrarlogin" href="login" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Iniciar Sesión</a>
{else}
  <a href="logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cerrar Sesión</a>
{/if}

<ul class="list-group">
  {foreach from=$autos item=auto}
    <li>
      <div>
        <a id="info" href="detalle/{$auto['id_auto']}" class="list-group-item">{$auto['nombre']}: {$auto['modelo']}</a>
        {if ($admin == 1)}
          <a id="modificar" href="modificarauto/{$auto['id_auto']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modificar</a>
          <a id="eliminar" href="borrar/{$auto['id_auto']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Eliminar</a>
        {/if}
      </div>
    </li>
  {/foreach}
</ul>
{include file="footer.tpl"}
