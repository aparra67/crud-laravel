<div class="row mb-3">
  <label for="Nombre" class="col-sm-2 col-form-label">Nombre</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}" id="Nombre">
  </div>
</div>
<div class="row mb-3">
  <label for="PrimerApellido" class="col-sm-2 col-form-label">Primer Apellido</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="PrimerApellido" value="{{ isset($empleado->PrimerApellido) ? $empleado->PrimerApellido : '' }}" id="PrimerApellido">
  </div>
</div>
<div class="row mb-3">
  <label for="SegundoApellido" class="col-sm-2 col-form-label">Segundo Apellido</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="SegundoApellido" value="{{ isset($empleado->SegundoApellido) ? $empleado->SegundoApellido : '' }}" id="SegundoApellido">
  </div>
</div>
<div class="row mb-3">
  <label for="Correo" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input type="email" class="form-control" name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : '' }}" id="Correo">
  </div>
</div>
<div class="mb-3">
  <label for="Foto" class="form-label">Foto de Perfil</label>
  @if(isset($empleado->Foto))
  <img src="{{ asset('storage').'/'.$empleado->Foto }}" style="width: 80px; height: auto">
  @endif
  <input class="form-control" type="file" name="Foto" value="" id="Foto">
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-star">
  <a href="{{ url('empleado/') }}" class="btn btn-primary me-md-2">< Volver</a>
  <button type="submit" class="btn btn-success">Enviar</button>
</div>