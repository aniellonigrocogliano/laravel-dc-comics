@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica fumetto</h1>

        <form action="{{ route('coomic.update', $coomic->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Titolo</span>
                <input id="title" name="title" type="text" class="form-control" value="{{ $coomic->title }}"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Descrizione</span>
                <textarea id="description" name="description" class="form-control">{{ $coomic->description }}"</textarea>
            </div>


            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon3">Url al poster</span>
                    <input value="{{ $coomic->thumb }}" type="text" class="form-control"
                        aria-describedby="basic-addon3 basic-addon4" id="thumb" name="thumb">
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Prezzo</span>
                <input value="{{ $coomic->price }}" type="text" class="form-control" id="price" name="price">

            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Serie</span>
                <input id="series" name="series" type="text" class="form-control" value="{{ $coomic->series }}"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Data di vendita</span>
                <input id="sale_date" name="sale_date" type="date" class="form-control" aria-describedby="basic-addon1"
                    value="{{ $coomic->sale_date }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tipologia</span>
                <input id="type" name="type" type="text" class="form-control" value="{{ $coomic->type }}"
                    aria-describedby="basic-addon1">
            </div>

            <button class="btn btn-success m-3" type="submit">Salva modifiche</button><a
                class=" m-3 btn btn-outline-danger" href="{{ route('coomic.index') }}">Annulla</a>
        </form>
    </div>
@endsection
