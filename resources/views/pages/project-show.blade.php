@extends('layouts.main-layout')

@include('content.header')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="ms_singol_card">
        {{-- <img src="{{asset('storage/dino.jpg')}}" alt=""> --}}
        <div class="d-flex justify-content-center pb-3">
            <img class="img" src="{{asset('storage/' . $project -> img)}}" alt="">
        </div>

        <h4>Lavoro elaborato per {{$project -> name}} S.P.A.</h4>
        <div class="pb-3">descrizione lavoro: <br> <br>
            {{$project -> description}}
        </div>

        <span>repository link:</span>
        <a href="">
            <div>
                {{$project -> repo_link}}
            </div>
        </a>

        <div class="my-4"> Rilasciato il: {{$project -> release_at}}</div>
        <a href="/">
            <div class="btn btn-outline-primary">INDIETRO</div>
        </a>
    </div>
</div>

@endsection