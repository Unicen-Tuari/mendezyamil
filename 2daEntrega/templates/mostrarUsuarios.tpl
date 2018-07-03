{include file="header.tpl"}
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-12">
        <h1>MENDEZ AUTOMOTORES</h1>
        <nav class="nav nav-pills nav-justified">
          <a class="nav-link" href="./">Inicio</a>
          <a class="nav-link" href="verautos">Autos</a>
          <a class="nav-link" href="vermarcas">Marcas</a>
          {if ($admin == 1)}
            <a class="nav-link active" href="verusuarios">Usuarios</a>
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
        <h2>Lista de Usuarios</h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Usuario</th>
              <th scope="col">Permisos</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            {foreach from=$usuarios item=usuario}
              <tr>
                <td>{$usuario['nombre']}</td>
                <td>{$usuario['apellido']}</td>
                <td>{$usuario['usuario']}</td>
                <td>{$usuario['admin']}</td>
                <td>
                  <a id="modificar" href="modificarusuario/{$usuario['id_usuario']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Modificar</a>
                  <a id="eliminar" href="borrarusuario/{$usuario['id_usuario']}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Eliminar</a>
                </td>
              </tr>
            {/foreach}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
{include file="footer.tpl"}
