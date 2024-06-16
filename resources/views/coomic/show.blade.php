@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card ">
            <img src="{{ $coomic->thumb }}" class="img-thumbnail rounded mx-auto d-block"alt="{{ $coomic->title }}"
                style="width: 350px;">
            <div class="card-body">
                <h5 class="card-title">{{ $coomic->title }}</h5>
                <p class="card-text">Serie: {{ $coomic->series }}</p>
                <p class="card-text">Tipo: {{ $coomic->type }}</p>
                <p class="card-text">Descrizione: {{ $coomic->description }}</p>
                <p class="card-text">Prezzo: {{ $coomic->price }}</p>
                <p class="card-text">Data di vendita: {{ $coomic->sale_date }}</p>

            </div>
        </div>
    </div>
@endsection
