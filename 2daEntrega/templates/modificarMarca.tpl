{include file="header.tpl"}
<form action="../updatemarca" method="post">
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" value="{$nombre}">
  <label for="descripcion">Descripcion</label>
  <textarea name="descripcion" rows="8" cols="80">{$descripcion}</textarea>
  <button type="submit" value="{$id_marca}" name="id_marca">Editar</button>
{include file="footer.tpl"}
