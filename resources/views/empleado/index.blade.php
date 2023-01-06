<div class="container">
    <h1 class="titulo">Lista de empleados</h1>
    <a href="{{ url('empleado/create') }}">Nuevo Registro</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Primer Apellido</th>
                    <th scope="col">Segundo Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                <tr class="">
                    <td scope="row">{{ $empleado->id}}</td>
                    <td>
                        <img src="{{ asset('storage').'/'.$empleado->Foto }}" style="width: 80px; height: auto">
                    </td>
                    <td>{{ $empleado->Nombre}}</td>
                    <td>{{ $empleado->PrimerApellido}}</td>
                    <td>{{ $empleado->SegundoApellido}}</td>
                    <td>{{ $empleado->Correo}}</td>
                    <td>
                        <a href="{{ url('empleado/'.$empleado->id.'/edit') }}">Editar</a>

                        <form action="{{ url('empleado/'.$empleado->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick="return confirm('¿Seguro que deseas borrar este elemento?')" value="Eliminar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</div>