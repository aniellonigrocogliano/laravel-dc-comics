@extends('layouts.app')

@section('content')
    <section class="bg-section m-3">
        <div class="container d-flex justify-content-between flex-wrap">
            <div class="row g-3 wrap d-flex justify-content-between">
                @foreach ($coomics as $coomics)
                    <div class="col-4 ">
                        @include('partials.card')
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
