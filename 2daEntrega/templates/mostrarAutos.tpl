{include file="header.tpl"}
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-12">
        <h1>MENDEZ AUTOMOTORES</h1>
        <nav class="nav nav-pills nav-justified">
          <a class="nav-link" href="./">Inicio</a>
          <a class="nav-link active" href="verautos">Autos</a>
          <a class="nav-link" href="vermarcas">Marcas</a>
          {if ($admin == 1)}
            <a class="nav-link" href="verusuarios">Usuarios</a>
          {/if}
          {if !$login}
            <a class="nav-link" href="login">Iniciar Sesión</a>
          {else}
            <a class="nav-link" href="logout">Cerrar Sesión</a>
          {/if}
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2>Lista de Autos</h2>

        {if ($admin == 1)}
        <a id="crearAuto" href="crearauto" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Crear Auto</a>
        {/if}

        <ul class="list-group">
          {foreach from=$autos item=auto}
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-8">
                  <a id="info" href="detalle/{$auto['id_auto']}">{$auto['nombre']}: {$auto['modelo']}</a>
                </div>
                <div class="col-md-4">
                  {if ($admin == 1)}
                    <a id="modificar" href="modificarauto/{$auto['id_auto']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modificar</a>
                    <a id="eliminar" href="borrar/{$auto['id_auto']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Eliminar</a>
                  {/if}
                </div>
              </div>
            </li>
          {/foreach}
        </ul>
      </div>
    </div>
  </div>
</div>
{include file="footer.tpl"}
