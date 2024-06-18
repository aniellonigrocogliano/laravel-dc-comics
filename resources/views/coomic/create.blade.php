@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Aggiungi un nuovo fumetto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('coomic.store') }}" method="POST">
            @csrf

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Titolo</span>
                <input value="{{ old('title') }}" id="title" name="title" type="text"
                    class="form-control @error('title') is-invalid @enderror" placeholder="Titolo">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Descrizione</span>
                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                    placeholder="Descrizione">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Url al poster</span>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror"
                    aria-describedby="basic-addon3" id="thumb" name="thumb" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Prezzo</span>
                <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Prezzo"
                    id="price" name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Serie</span>
                <input id="series" name="series" type="text"
                    class="form-control @error('series') is-invalid @enderror" placeholder="Serie"
                    aria-describedby="basic-addon1" value="{{ old('series') }}">
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
                    value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tipologia</span>
                <input id="type" name="type" type="text" class="form-control @error('type') is-invalid @enderror"
                    placeholder="Tipologia" aria-describedby="basic-addon1" value="{{ old('type') }}">
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-success m-3" type="submit">Aggiungi fumetto</button>
            <a class="m-3 btn btn-outline-danger" href="{{ route('coomic.index') }}">Annulla</a>
        </form>
    </div>
@endsection
