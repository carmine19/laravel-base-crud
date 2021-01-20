
@extends('layouts.app')

@section('content')

<h1>test-index-products</h1>

   <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti i vestiti</h1>
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
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
