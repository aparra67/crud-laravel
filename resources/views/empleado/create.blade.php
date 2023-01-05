<div class="container">
  <h1 class="titulo">Aca se debe crear un empleado</h1>
  <form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
      <label for="Nombre" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="Nombre" id="Nombre">
      </div>
    </div>
    <div class="row mb-3">
      <label for="PrimerApellido" class="col-sm-2 col-form-label">Primer Apellido</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="PrimerApellido" id="PrimerApellido">
      </div>
    </div>
    <div class="row mb-3">
      <label for="SegundoApellido" class="col-sm-2 col-form-label">Segundo Apellido</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="SegundoApellido" id="SegundoApellido">
      </div>
    </div>
    <div class="row mb-3">
      <label for="Correo" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="Correo" id="Correo">
      </div>
    </div>
    <div class="mb-3">
      <label for="Foto" class="form-label">Foto de Perfil</label>
      <input class="form-control" type="file" name="Foto" id="Foto">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>