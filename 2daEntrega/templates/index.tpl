{include file="header.tpl"}
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <h1>MENDEZ AUTOMOTORES</h1>
    <nav class="nav nav-pills nav-justified">
      <a class="nav-link active" href="">Inicio</a>
      <a class="nav-link" href="verautos">Autos</a>
      <a class="nav-link" href="vermarcas">Marcas</a>
      {if ($admin == 1)}
        <a class="nav-link" href="verusuarios">Usuarios</a>
      {/if}
      {if !$login}
        <a class="nav-link" href="login">Iniciar Sesión</a>
      {else}
        <a class="nav-link active">Hola {$nombre}!</a>
        <a class="nav-link" href="logout">Cerrar Sesión</a>
      {/if}
    </nav>
  </div>
</div>
{include file="footer.tpl"}
