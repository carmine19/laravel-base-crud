
@extends('layouts.app')

@section('content')

    <div id="add_category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Modifica utente</h1>
                    <form method="POST" action="{{route('users.update', ['user' => $users->id])}}">
                        @csrf
                        @method('PUT')
                      <div class="form-group mb-5 mt-5">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" name="name" class="form-control" placeholder="Nome..." value="{{$users->name}}" >
                      </div>

                        <div class="form-group mb-5 mt-5">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password..." value="{{$users->password}}">
                      </div>

                        <div class="form-group mb-5 mt-5">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="text" name="email" class="form-control" placeholder="Email..." value="{{$users->email}}">
                      </div>

                      <button type="submit" class="btn btn-warning">Modifica</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
