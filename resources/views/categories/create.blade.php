
@extends('layouts.app')

@section('content')

    <div id="add_category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Aggiungi una nuova categoria</h1>
                    <form method="POST" action="{{route('categories.store')}}">
                        @csrf
                      <div class="form-group mb-5 mt-5">
                        <label for="exampleInputEmail1">Categoria</label>
                        <input type="text" name="type" class="form-control" placeholder="Scrivi qui...">
                      </div>
                      <button type="submit" class="btn btn-primary">Aggiungi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
