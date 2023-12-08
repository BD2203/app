@extends('layouts.cuerpo')

@section('content')
Codigo de empleado {{$empleado}}
Codigo de afiliado {{$afi}}
Nombre de afiliado {{$nombre}}
<h1>Retiros Existentes</h1>
<a href="/retiro/create/{{$empleado}}/{{$afi}}/{{$nombre}}" class="btn btn-success">Crear</a>
<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Idempleaado</th>
        <th>IdAfiliado</th>
        <th>NombreAfiliado</th>
        <th>Fecha</th>
        <th>Cantidad</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($datosRetiros as $retiro)
        <tr>
            <th>{{$retiro->id}}</th>
            <th>{{$retiro->codempleado}}</th>
            <th>{{$retiro->codafiliado}}</th>
            <th>{{$retiro->nombreafiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->cantidad}}</th>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection 