@extends('layouts.cuerpo')

@section('content')
<h1>Empleados Existentes</h1>
<a href="{{ route('empleado.create') }}" class="btn btn-success">Crear</a>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($datosEmpleados as $empleado)
        <tr>
            <th>{{$empleado->id}}</th>
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>
            <th><a href= "\afiliado\{{$empleado->id}}">Afiliadophp</a></th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection 
