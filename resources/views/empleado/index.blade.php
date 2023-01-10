@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Lista de empleados</h1>
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <strong>
            {{ Session::get('mensaje')}}
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <a href="{{ url('empleado/create') }}" class="btn btn-outline-success mb-2">Nuevo Registro</a>
    @if(count($empleados) > 0)
        <div class="table-responsive mt-3">
            <table class="table table-striped bg-primary .bg-gradient bg-opacity-10">
                <thead class="bg-primary .bg-gradient bg-opacity-50">
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
                    <tr>
                        <td scope="row">{{ $empleado->id}}</td>
                        <td>
                            <img src="{{ asset('storage').'/'.$empleado->Foto }}" class="img-thumbnail rounded" width="100px">
                        </td>
                        <td>{{ $empleado->Nombre}}</td>
                        <td>{{ $empleado->PrimerApellido}}</td>
                        <td>{{ $empleado->SegundoApellido}}</td>
                        <td>{{ $empleado->Correo}}</td>
                        <td>
                            <a href="{{ url('empleado/'.$empleado->id.'/edit') }}" class="btn btn-primary">
                                Editar
                            </a>

                            <form action="{{ url('empleado/'.$empleado->id) }}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas borrar este elemento?')" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="container">
            <h3>No Existen Registros</h3>
        </div>
    @endif
</div>
@endsection