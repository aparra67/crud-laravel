@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center mt-2 mb-5">Crear Empleado</h1>
  <form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form')
  </form>
</div>
@endsection