@extends('layouts.main-layout')


@include('content.header')
@section('content')

<div class="container">
    <h1 class="text-center my-3">Portfolio di Fabio babaglioni</h1>

    <div class="d-flex flex-wrap justify-content-between">
        @foreach ($projects as $project)
        <div class="ms_card mb-4">
            <h3>{{$project -> name}}</h3>
            <div>link img: {{$project -> img}}</div>
            <div>Rilasciato il {{$project -> release_at}}</div>
            <div class="text-center Pt-4">
                <a href="{{route('project.show', $project)}}">
                    <div class="btn btn-outline-primary"> MOSTRA DETTAGLI</div>
                </a>
            </div>

        </div>
        @endforeach
    </div>

</div>


@endsection

@include('content.footer')