@extends('layouts.cuerpo')

@section('content')
<h1>Crear Retiro</h1>
    <form action="{{ route('retiro.store') }}" method="POST">
        @csrf
        <input type="text" name="codempleado" value="{{ $empleado }}" readonly>
        <input type="text" name="codafiliado" value="{{ $afi }}" readonly>
        <input type="text" name="nombreafiliado" value="{{ $nombre }}"readonly>
        
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad">
        </div>  
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('retiro.index') }}" class="btn btn-danger">Cancelar</a>
    </form>
    @endsection