<h1 class="titulo">Editar Información De Empleado</h1>
<form action="{{ url('empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('empleado.form')
</form>
