
@extends('layouts.app')

@section('content')

    <div id="add_category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Registra nuovo utente</h1>
                    <form method="POST" action="{{route('users.store')}}">
                        @csrf
                      <div class="form-group mb-5 mt-5">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" name="name" class="form-control" placeholder="Nome...">
                      </div>

                        <div class="form-group mb-5 mt-5">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password...">
                      </div>

                        <div class="form-group mb-5 mt-5">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="text" name="email" class="form-control" placeholder="Email...">
                      </div>

                      <button type="submit" class="btn btn-primary">Aggiungi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
