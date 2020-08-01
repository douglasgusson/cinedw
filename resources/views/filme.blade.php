@extends('layout')

@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <img class="rounded mx-auto d-block mb-4" src="/uploads/{{ $filme->poster }}" alt="Poster {{ $filme->titulo }}">
                    <h3 class="display-4">{{ $filme->titulo }}</h3>
                    <span class="badge badge-pill badge-dark mb-2">{{ $filme->genero->nome }}</span>
                    <strong class="d-block mb-2">Estreia: {{ \Carbon\Carbon::parse($filme->lancamento)->format('d/m/Y') }}</strong>
                    <p class="lead">
                        {{ $filme->sinopse }}
                    </p>
                    <ul class="list-group list-group-flush rounded text-justify">
                        <li class="list-group-item">Duração: {{ $filme->duracao }} min</li>
                        <li class="list-group-item">Direção: {{ $filme->direcao }}</li>
                        <li class="list-group-item">Classificação: {{ $filme->classificacao }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection