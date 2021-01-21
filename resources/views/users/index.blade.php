
@extends('layouts.app')

@section('content')


   <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti i vestiti</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $ele)
                            <tr>
                                <td>
                                    {{ $ele->id }}
                                </td>
                                <td>
                                    {{ $ele->name }}
                                </td>
                                <td>
                                    {{ $ele->email }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-lg-12">
                    <a href="{{route('users.create')}}" class="btn btn-info">Aggiungi utente</a>
                </div>
            </div>
        </div>
    </div>

@endsection

