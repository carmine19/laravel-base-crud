
@extends('layouts.app')

@section('content')


   <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti gli utenti</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
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
                                <td>
                                    <a href="{{ route('users.show', ['user' => $ele->id ]) }}"
                                        class="btn btn-success">
                                        Visualizza
                                     </a>
                                    <a href="{{ route('users.edit', ['user' => $ele->id ]) }}"
                                        class="btn btn-warning">
                                        Modifica
                                     </a>
                                    <form method="POST" class="d-inline-block"
                                    action="{{ route('users.destroy', ['user' => $ele->id]) }}">
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
                <div class="col-lg-12">
                    <a href="{{route('users.create')}}" class="btn btn-info">Aggiungi utente</a>
                </div>
            </div>
        </div>
    </div>

@endsection

