@extends('layouts.app')
    
@section('content')
        
    <form action="{{route('bicicletas.store')}}" method="POST">

    @csrf

    <label>
        Titulo:
        <br>
        <input type="text" name="nombre_bicicleta">
    </label>
    <br>
    <label>
        Precio:
        <br>
        <input type="text" name="descripcion_bicicleta">
    </label>
    <br><br>
    
    <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

@endsection()