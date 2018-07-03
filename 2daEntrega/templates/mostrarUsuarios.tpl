{include file="header.tpl"}
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

<h2>Lista de Usuarios</h2>

  {foreach from=$usuarios item=usuario}
      <div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Usuario</th>
              <th scope="col">Permisos</th>
            </tr>
          </thead>
          <tbody>
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
          </tbody>
        </table>
      </div>
  {/foreach}
{include file="footer.tpl"}
