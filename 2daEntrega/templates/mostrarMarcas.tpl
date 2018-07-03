{include file="header.tpl"}
<h1>MENDEZ AUTOMOTORES</h1>
<nav class="nav nav-pills nav-justified">
  <a class="nav-link" href="./">Inicio</a>
  <a class="nav-link" href="verautos">Autos</a>
  <a class="nav-link active" href="vermarcas">Marcas</a>
  {if !$login}
    <a class="nav-link" href="login">Iniciar Sesión</a>
  {else}
    <a class="nav-link" href="logout">Cerrar Sesión</a>
  {/if}
</nav>
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
{if ($admin == 1)}
<a id="crearmarca" href="crearmarca" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Crear Marca</a>
{/if}

<ul class="list-group">
  {foreach from=$marcas item=marca}
    <li>
      <div>
        <h4 class="list-group-item">{$marca['nombre']}</h4>
        <p>{$marca['descripcion']}</p>
        {if ($admin == 1)}
          <a id="modificar" href="modificarmarca/{$marca['id_marca']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modificar</a>
          <a id="eliminar" href="borrarmarca/{$marca['id_marca']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Eliminar</a>
        {/if}
      </div>
    </li>
  {/foreach}
</ul>
{include file="footer.tpl"}
