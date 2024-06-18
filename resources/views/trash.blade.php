@extends('layouts.app')

@section('content')
    <section class="container flex p-3">
        <h1>Fumetti Cancellati</h1>
        @if ($coomics->isEmpty())
            <p>Nessun fumetto cancellato.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>

                        <th scope="col">Serie</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Data di vendita</th>
                        <th scope="col">Data di cancellazione</th>
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
                            <td>{{ $coomics->deleted_at }}</td>
                            <td>
                                <form action="{{ route('coomic.restore', $coomics->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-outline-primary">Ripristina</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('coomic.delete', $coomics->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Elimina definitivamente</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
    </section>
    @endif
@endsection
