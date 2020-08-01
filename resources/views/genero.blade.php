@extends('layout')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1>{{ $genero->nome }}</h1>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row row-cols-1 row-cols-md-3">
                    @foreach($genero->filmes as $filme)
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
        </div>
    </div>
</div>

@endsection