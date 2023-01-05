<div class="container">
    <h1 class="titulo">Lista de empleados</h1>
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
                    <td>{{ $empleado->Foto}}</td>
                    <td>{{ $empleado->Nombre}}</td>
                    <td>{{ $empleado->PrimerApellido}}</td>
                    <td>{{ $empleado->SegundoApellido}}</td>
                    <td>{{ $empleado->Correo}}</td>
                    <td>Editar | Eliminar</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</div>