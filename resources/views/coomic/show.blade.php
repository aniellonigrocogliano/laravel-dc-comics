@extends('layouts.app')

@section('content')
    <div class="container m-3">
        <div class="card">
            <img src="{{ $coomic->thumb }}" class="card-img-fluid" alt="{{ $coomic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $coomic->title }}</h5>
                <p class="card-text">Serie: {{ $coomic->series }}</p>
                <p class="card-text">Tipo: {{ $coomic->type }}</p>
                <p class="card-text">Descrizione: {{ $coomic->description }}</p>
                <p class="card-text">Prezzo: {{ $coomic->price }}</p>
                <p class="card-text">Data di vendita: {{ $coomic->sale_date }}</p>

            </div>
        </div>
        <a class="btn btn-outline-danger" href="{{ route('coomic.index') }}">Torna indietro</a>
    </div>
@endsection
