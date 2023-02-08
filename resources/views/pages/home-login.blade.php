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

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome azienda</th>
                <th scope="col">Programmi utilizzati</th>
                <th scope="col">Link al sito</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                    <a href="#">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>
                <td>
                    <a href="#">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

</div>

@endsection

@include('content.footer')