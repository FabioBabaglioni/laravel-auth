@extends('layouts.main-layout')

@section('content')

<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Area riservata utente Fabio Babaglioni</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <a href="/">
                    <div class="btn btn-outline-success">Area pubblica</div>
                </a>

            </div>
        </div>
    </nav>
</div>

<div class="container">
    <h1 class="text-center mt-3">Portfolio di Fabio babaglioni</h1>

    <h3 class="text-center py-4">Aggiungi un nuovo progetto</h3>
    <div class="ms_card">
        <h3>Titolo Azienda</h3>
        <div>Programmi utilizzati</div>
        <div>link</div>
        <div class="d-flex justify-content-between">
            <a href="">
                <div class="btn btn-outline-success"> AGGIORNA</div>
            </a>

            <a href="">
                <div class="btn btn-outline-primary"> MOSTRA</div>
            </a>

            <a href="">
                <div class="btn btn-outline-danger"> CANCELLA</div>
            </a>
        </div>
    </div>
</div>

@endsection

@include('content.footer')