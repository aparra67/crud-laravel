<div class="container">
  <h1 class="titulo">Crear Empleado</h1>
  <form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form')
  </form>
</div>