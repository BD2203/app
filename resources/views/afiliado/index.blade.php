@extends('layouts.cuerpo')

@section('content')
Codigo de Empleados {{$empleados}}

<h1>Afiliados Existentes</h1>
<a href="/afiliado/create/{{$empleados}}" class="btn btn-success">Crear</a>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($datosAfiliados as $afiliado)
        <tr>
            <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->nombre}}</th>
            <th>{{$afiliado->apellido}}</th>
            <th><a href="/deposito/{{$empleados}}/{{$afiliado->id}}/{{$afiliado->nombre}}" class="btn btn-primary">Deposito</a></th> 
            <th><a href="/retiro/{{$empleados}}/{{$afiliado->id}}/{{$afiliado->nombre}}"class="btn btn-primary" >Retiro</a></th> 
        </tr>
        @endforeach
    </tbody>
</table>
@endsection 