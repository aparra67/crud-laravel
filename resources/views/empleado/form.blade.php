@if(count($errors) > 0)
  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="form-group">
  <label for="Nombre" class="col-sm-2 col-form-label">Nombre</label>
  <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}" id="Nombre">
</div>
<div class="form-group">
  <label for="PrimerApellido" class="col-sm-2 col-form-label">Primer Apellido</label>
  <input type="text" class="form-control" name="PrimerApellido" value="{{ isset($empleado->PrimerApellido) ? $empleado->PrimerApellido : '' }}" id="PrimerApellido">
</div>
<div class="form-group">
  <label for="SegundoApellido" class="col-sm-2 col-form-label">Segundo Apellido</label>
  <input type="text" class="form-control" name="SegundoApellido" value="{{ isset($empleado->SegundoApellido) ? $empleado->SegundoApellido : '' }}" id="SegundoApellido">
</div>
<div class="form-group">
  <label for="Correo" class="col-sm-2 col-form-label">Email</label>
  <input type="email" class="form-control" name="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : '' }}" id="Correo">
<div class="form-group">
  <label for="Foto" class="col-sm-2 col-form-label">Foto de Perfil</label>
  <br>
  @if(isset($empleado->Foto))
  <img src="{{ asset('storage').'/'.$empleado->Foto }}" class="img-thumbnail rounded" width="100px">
  @endif
  <input class="form-control" type="file" name="Foto" value="" id="Foto">
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-star mt-3">
  <a href="{{ url('empleado/') }}" class="btn btn-primary me-md-2">< Volver</a>
  <button type="submit" class="btn btn-success">Enviar</button>
</div>