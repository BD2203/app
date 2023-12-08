@extends('layouts.cuerpo')

@section('content')
Codigo de empleado {{$empleado}}
Codigo de afiliado {{$afi}}
Nombre de afiliado {{$nombre}}
<h1>Depositos Existentes</h1>
<a href="/deposito/create/{{$empleado}}/{{$afi}}/{{$nombre}}" class="btn btn-success">Crear</a>
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
        @foreach ($datosDepositos as $deposito)
        <tr>
            <th>{{$deposito->id}}</th>
            <th>{{$deposito->codempleado}}</th>
            <th>{{$deposito->codafiliado}}</th>
            <th>{{$deposito->nombreafiliado}}</th>
            <th>{{$deposito->fecha}}</th>
            <th>{{$deposito->cantidad}}</th>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection 