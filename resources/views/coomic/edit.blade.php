@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica fumetto</h1>

        <form action="{{ route('coomic.update', $coomic->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Titolo</span>
                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title', $coomic->title) }}" aria-describedby="basic-addon1">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Descrizione</span>
                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $coomic->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon3">Url al poster</span>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror"
                        aria-describedby="basic-addon3 basic-addon4" id="thumb" name="thumb"
                        value="{{ old('thumb', $coomic->thumb) }}">
                    @error('thumb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Prezzo</span>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ old('price', $coomic->price) }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Serie</span>
                <input id="series" name="series" type="text"
                    class="form-control @error('series') is-invalid @enderror" value="{{ old('series', $coomic->series) }}"
                    aria-describedby="basic-addon1">
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Data di vendita</span>
                <input id="sale_date" name="sale_date" type="date"
                    class="form-control @error('sale_date') is-invalid @enderror" aria-describedby="basic-addon1"
                    value="{{ old('sale_date', $coomic->sale_date) }}">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tipologia</span>
                <input id="type" name="type" type="text" class="form-control @error('type') is-invalid @enderror"
                    value="{{ old('type', $coomic->type) }}" aria-describedby="basic-addon1">
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-success m-3" type="submit">Salva modifiche</button><a class="m-3 btn btn-outline-danger"
                href="{{ route('coomic.index') }}">Annulla</a>
        </form>
    </div>
@endsection
