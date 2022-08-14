@extends('layouts.app')

@section('content')



<h1>Hola desde Show  {{$bicicleta}}</h1>



<form action="{{route('bicicletas.destroy',$bicicleta)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>

</form>




@endsection()