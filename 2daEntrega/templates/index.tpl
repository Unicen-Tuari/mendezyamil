{include file="header.tpl"}
<h1>MENDEZ AUTOMOTORES</h1>
<nav class="nav nav-pills nav-justified">
  <a class="nav-link active" href="">Inicio</a>
  <a class="nav-link" href="verautos">Autos</a>
  <a class="nav-link" href="vermarcas">Marcas</a>
  {if !$login}
    <a class="nav-link" href="login">Iniciar Sesión</a>
  {else}
    <a class="nav-link" href="logout">Cerrar Sesión</a>
  {/if}
</nav>
{include file="footer.tpl"}
