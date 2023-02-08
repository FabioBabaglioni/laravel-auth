@extends('layouts.main-layout')

@section('content')

<div class="container">
    <h1 class="text-center mt-3">Portfolio di Fabio babaglioni</h1>

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