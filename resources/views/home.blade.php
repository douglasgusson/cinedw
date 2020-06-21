@extends('layout')

@section('content')
    <div class="title m-b-md">
        Cine DW
    </div>

    <div class="links">
        @foreach($generos as $genero)
        <a href="#">{{ $genero->nome }}</a>
        @endforeach
    </div>
@endsection
