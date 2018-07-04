{include file="header.tpl"}
<div class="row justify-content-md-center">
  <div class="col-md-8">
    <form id="formMarca" action="guardarmarca" method="post">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" value=""  class="form-control">
        </div>
        <div class="form-group col-md-8">
          <label for="descripcion">Descripcion</label>
          <textarea name="descripcion" rows="8" cols="80"  class="form-control"></textarea>
        </div>
      </div>
      <button name="button" type="submit" class="btn btn-primary">Crear</button>
    </form>
  </div>
</div>
{include file="footer.tpl"}
