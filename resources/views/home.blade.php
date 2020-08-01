@extends('layout')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1>{{ config('app.name', 'Laravel') }}</h1>
        <p class="lead text-muted">Venha se divertir no melhor cinema!</p>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="display-4 mb-4">Filmes</h3>

                <div class="row row-cols-1 row-cols-md-3">

                    @foreach($filmes as $filme)

                    <div class="col mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="/uploads/{{ $filme->poster }}" alt="Poster {{ $filme->titulo }}">
                            <div class="card-body">
                                <p class="card-text">{{ $filme->titulo }}</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge badge-pill badge-dark">{{ $filme->genero->nome }}</span>
                                    <small class="text-muted">{{ $filme->duracao }} min</small>
                                </div>
                                <div class="text-muted mb-2">
                                    Estreia: {{ \Carbon\Carbon::parse($filme->lancamento)->format('d/m/Y') }}

                                </div>
                                <div class="btn-group">
                                    <a href="/filme/{{ $filme->id }}" class="btn btn-sm btn-outline-secondary">Ver mais</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>

            <div class="col-md-3">
                <h3 class="display-5">Exibições</h3>
                <div class="card d-block mb-4">
                    <div class="card-header">
                        Mulher-Maravilha
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-around">
                            <span>18:40</span>
                            <span>Dublado</span>
                            <span>3D</span>
                        </li>
                    </ul>
                </div>
                <div class="card d-block mb-4">
                    <div class="card-header">
                        Tomb Raider: A Origem
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-around">
                            <span>19:25</span>
                            <span>Legendado</span>
                            <span>2D</span>
                        </li>
                    </ul>
                </div>
                <h3 class="display-5">Gêneros</h3>
                <ul class="nav flex-column">
                    @foreach($generos as $genero)
                    <li class="nav-item">
                        <a class="nav-link" href="/genero/{{ $genero->id }}">{{ $genero->nome }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection