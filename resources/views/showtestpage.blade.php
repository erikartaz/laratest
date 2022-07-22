@extends('layout.master')

@section('title', 'Titolo della pagina')
    
@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </div>
                </div>
                </div>
            </nav>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h4 class="card-title">Segnalazione DXC</h4>
                        <p class="card-text">Procedura per segnalare un incident a DXC con mail e apertura ticket sul Customer portal</p>
                        <a name="" id="" class="btn btn-primary" href="#" role="button">Avanti</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h4 class="card-title">Segnalazione Axians</h4>
                        <p class="card-text">Procedura per segnalare un incident ad Axians con mail</p>
                        <a name="" id="" class="btn btn-primary" href="#" role="button">Avanti</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection