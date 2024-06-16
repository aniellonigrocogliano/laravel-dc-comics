@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Aggiungi un nuovo fumetto</h1>

        <form action="{{ route('coomic.store') }}" method="POST">

            @csrf

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Titolo</span>
                <input id="title" name="title" type="text" class="form-control" placeholder="Titolo"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Descrizione</span>
                <textarea id="description" name="description" class="form-control" placeholder="Descrizione"></textarea>
            </div>


            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon3">Url al poster</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon3 basic-addon4" id="thumb"
                        name="thumb">
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Prezzo</span>
                <input type="text" class="form-control" placeholder="Prezzo" id="price" name="price">

            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Serie</span>
                <input id="series" name="series" type="text" class="form-control" placeholder="Serie"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Data di vendita</span>
                <input id="sale_date" name="sale_date" type="date" class="form-control" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tipologia</span>
                <input id="type" name="type" type="text" class="form-control" placeholder="Tipologia"
                    aria-describedby="basic-addon1">
            </div>

            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
@endsection
