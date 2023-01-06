<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empleados'] = Empleado::paginate(5);
        return view('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');

        if ($request->hasFile('Foto')) {
            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }
        Empleado::insert($datosEmpleado);
        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        // dd(compact('empleado'));
        return view('empleado.editar', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEmpleado = request()->except(['_token', '_method']);
        /** SI EXISTE EL ARCHIVO 'Foto' */
        if ($request->hasFile('Foto')) {
            $empleado = Empleado::findOrFail($id); // Busca en la BD la informacion correspondiente al id
            Storage::delete('public/'.$empleado->Foto); // ELIMINA el archivo Foto del storage
            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public'); // coloca el nuevo archivo en el storage y en la variable correspondiente (Foto)
        }
        Empleado::where('id', '=', $id)->update($datosEmpleado);
        return redirect('empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('hola entre en el controlador');
        $empleado = Empleado::findOrFail($id); // Busca en la BD la informacion correspondiente al id
        
        /** ELIMINACION del archivo Foto del storage */
        if (Storage::delete('public/'.$empleado->Foto)){
            Empleado::destroy($id); // BORRA LOS DATOS COMPLETAMENTE DE LA BD
        }
        
        return redirect('empleado');
    }
}
