{include file="header.tpl"}
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <h1>MENDEZ AUTOMOTORES</h1>
    <nav class="nav nav-pills nav-justified">
      <a class="nav-link" href="./">Inicio</a>
      <a class="nav-link" href="verautos">Autos</a>
      <a class="nav-link active" href="vermarcas">Marcas</a>
      {if ($admin == 1)}
        <a class="nav-link" href="verusuarios">Usuarios</a>
      {/if}
      {if !$login}
        <a class="nav-link" href="login">Iniciar Sesión</a>
      {else}
        <a class="nav-link" href="logout">Cerrar Sesión</a>
      {/if}
    </nav>
    <h2>Lista de Marcas</h2>
    {if ($admin == 1)}
    <a id="crearmarca" href="crearmarca" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Crear Marca</a>
    {/if}

    <ul class="list-group">
      {foreach from=$marcas item=marca}
        <li class="list-group-item">
          <h4>{$marca['nombre']}</h4>
          <p>{$marca['descripcion']}</p>
          {if ($admin == 1)}
            <a id="modificar" href="modificarmarca/{$marca['id_marca']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modificar</a>
            <a id="eliminar" href="borrarmarca/{$marca['id_marca']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Eliminar</a>
          {/if}
        </li>
      {/foreach}
    </ul>
  </div>
</div>
{include file="footer.tpl"}
