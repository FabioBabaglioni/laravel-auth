@extends('layouts.main-layout')

@section('content')
<div class="container">
    <h2 class="text-center py-3">Aggiorna Progetto</h2>

    <form class="row g-3" method="POST">
        @csrf
        <div class="col-12">
            <label for="firstName" class="form-label fs-5">Nome Azienda</label>
            <input type="text" class="form-control" name="firstName" value="">
        </div>
        <div class="col-12">
            <label for="lastName" class="form-label fs-5">Descrizione</label>
            <textarea type="text" class="form-control" name="lastName" value=""></textarea>
        </div>
        <div class="col-12">
            <label for="dateOfBirth" class="form-label fs-5">Rilasciato il:</label>
            <input type="date" class="form-control" name="dateOfBirth" value="">
        </div>
        <div class="col-12">
            <label for="height" class="form-label fs-5">Repository link</label>
            <input type="text" class="form-control" name="height" value="">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success fs-5">Aggiorna progetto</button>
        </div>
    </form>
</div>
@endsection