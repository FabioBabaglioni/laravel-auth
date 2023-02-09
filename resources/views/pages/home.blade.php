@extends('layouts.main-layout')


<div class="background">
    @include('content.header')

    @section('content')

    <div class="container d-flex  justify-content-center">
        <div class="card_home mt-5">
            <h2 class="pb-3">Benvenuto nel portfolio di Babaglioni Fabio</h2>
            <a href="{{route('project.portfolio')}}">
                <div class="btn btn-danger">Clicca qui per avere accesso ai suoi lavori</div>
            </a>
        </div>

    </div>
</div>

@endsection