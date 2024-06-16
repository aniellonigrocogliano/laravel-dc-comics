@extends('layouts.app')

@section('content')
    <section class="container flex p-3">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>

                    <th scope="col">Serie</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Data di vendita</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coomics as $coomics)
                    <tr>
                        <td>{{ $coomics->id }}</td>
                        <td>{{ $coomics->title }}</td>
                        <td>{{ $coomics->series }}</td>
                        <td>{{ $coomics->price }}</td>
                        <td>{{ $coomics->sale_date }}</td>
                        <td><a class="btn btn-outline-primary" href="{{ route('coomic.show', $coomics->id) }}">Dettagli</a>
                        <td>
                            <form action="{{ route('coomic.destroy', $coomics->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Elimina</button>
                            </form>
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
