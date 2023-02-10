@extends('layouts.main-layout')

@section('content')
<div class="container">
    <h2 class="text-center py-3">Aggiorna Progetto</h2>

    <form class="row g-3" method="POST" action="{{route ('project.update')}}">
        @csrf
        <div class="col-12">
            <label for="name" class="form-label fs-5">Nome Azienda</label>
            <input type="text" class="form-control" name="name" value="{{$project -> name}}">
        </div>
        <div class="col-12">
            <label for="description" class="form-label fs-5">Descrizione</label>
            <textarea type="text" class="form-control" name="description">{{$project -> description}}</textarea>
        </div>
        <div class="col-12">
            <label for="release_at" class="form-label fs-5">Rilasciato il:</label>
            <input type="date" class="form-control" name="release_at" value="{{$project -> release_at}}">
        </div>
        <div class="col-12">
            <label for="repo_link" class="form-label fs-5">Img link</label>
            <input type="text" class="form-control" name="repo_link" value="{{$project -> img}}">
        </div>
        <div class="col-12">
            <label for="repo_link" class="form-label fs-5">Repository link</label>
            <input type="text" class="form-control" name="repo_link" value="{{$project -> repo_link}}">
        </div>

        <div class="col-6">
            <button type="submit" class="btn btn-success fs-5">Aggiorna progetto</button>
        </div>
        <a href="{{route('project.homeLogin')}}">
            <div class="btn btn-warning">INDIETRO</div>
        </a>
    </form>
</div>
@endsection