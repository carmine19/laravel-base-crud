
@extends('layouts.app')

@section('content')


   <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti i vestiti</h1>
                 <div class="col-lg-12 mb-3 mt-3">
                    <a href="{{ route('products.create') }}" class="btn btn-info">Aggiungi prodotto</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Colore</th>
                            <th scope="col">Taglia</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $ele)
                            <tr>
                                <td>
                                    {{ $ele->id }}
                                </td>
                                <td>
                                    {{ $ele->name }}
                                </td>
                                <td>
                                    {{ $ele->color }}
                                </td>
                                <td>
                                    {{ $ele->size }}
                                </td>
                                <td>
                                    {{ $ele->price }}
                                </td>
                                <td>
                                    <a href="{{ route('products.show', ['product' => $ele->id ]) }}"
                                        class="btn btn-info">
                                        Dettagli
                                    </a>
                                    <a href="{{ route('products.edit', ['product' => $ele->id ]) }}"
                                        class="btn btn-warning">
                                        Modifica
                                    </a>
                                    <form method="POST" class="d-inline-block"
                                    action="{{ route('products.destroy', ['product' => $ele->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Cancella
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
