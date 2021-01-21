
@extends('layouts.app')

@section('content')


   <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutte le categorie</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>

                        </tr>
                    </thead>
                    <tbody>
                   @forelse ($category as $ele)
                       <tr>
                           <td>{{ $ele->id }}</td>
                            <td>{{ $ele->type }}</td>
                       </tr>
                    @empty
                        <p>Non ci sono categorie</p>
                    @endforelse

                    </tbody>
                </table>
                <div class="col-lg-12">
                    <a href="{{route('categories.create')}}" class="btn btn-info">Aggiungi categoria</a>
                </div>
            </div>
        </div>
    </div>

@endsection
