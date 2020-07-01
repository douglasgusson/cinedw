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
                <h3 class="display-4">Filmes</h3>

                <div class="row row-cols-1 row-cols-md-3">

                    <div class="col mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHnxj473p5FpApEGIkO5pSca_MlJFLx5_qM2e7JHb2R4VzGMHg" alt="Poster Annabelle 3: De Volta Para Casa">
                            <div class="card-body">
                                <p class="card-text">Annabelle 3: De Volta Para Casa</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge badge-pill badge-dark">Terror</span>
                                    <small class="text-muted">110min</small>
                                </div>
                                <div class="text-muted mb-2">
                                    Estreia: 27/06/2019
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver mais</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHnxj473p5FpApEGIkO5pSca_MlJFLx5_qM2e7JHb2R4VzGMHg" alt="Poster Annabelle 3: De Volta Para Casa">
                            <div class="card-body">
                                <p class="card-text">Annabelle 3: De Volta Para Casa</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge badge-pill badge-dark">Terror</span>
                                    <small class="text-muted">110min</small>
                                </div>
                                <div class="text-muted mb-2">
                                    Estreia: 27/06/2019
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver mais</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHnxj473p5FpApEGIkO5pSca_MlJFLx5_qM2e7JHb2R4VzGMHg" alt="Poster Annabelle 3: De Volta Para Casa">
                            <div class="card-body">
                                <p class="card-text">Annabelle 3: De Volta Para Casa</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge badge-pill badge-dark">Terror</span>
                                    <small class="text-muted">110min</small>
                                </div>
                                <div class="text-muted mb-2">
                                    Estreia: 27/06/2019
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver mais</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHnxj473p5FpApEGIkO5pSca_MlJFLx5_qM2e7JHb2R4VzGMHg" alt="Poster Annabelle 3: De Volta Para Casa">
                            <div class="card-body">
                                <p class="card-text">Annabelle 3: De Volta Para Casa</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge badge-pill badge-dark">Terror</span>
                                    <small class="text-muted">110min</small>
                                </div>
                                <div class="text-muted mb-2">
                                    Estreia: 27/06/2019
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver mais</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHnxj473p5FpApEGIkO5pSca_MlJFLx5_qM2e7JHb2R4VzGMHg" alt="Poster Annabelle 3: De Volta Para Casa">
                            <div class="card-body">
                                <p class="card-text">Annabelle 3: De Volta Para Casa</p>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge badge-pill badge-dark">Terror</span>
                                    <small class="text-muted">110min</small>
                                </div>
                                <div class="text-muted mb-2">
                                    Estreia: 27/06/2019
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver mais</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-3">
                <h3 class="display-5">Exibições</h3>
            </div>
        </div>
    </div>
</div>

@endsection