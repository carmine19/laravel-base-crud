
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Inserisci nuovo prodotto </h1>
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf <!--  token obbligatorio per passare i dati -->
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Colore</label>
                        <input type="text" name="color" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Taglia</label>
                        <input type="text" name="size" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="number" name="price" class="form-control">
                    </div>
                    <div class="col-lg-12 mt-5">
                        <button href="#" class="btn btn-info" type="submit">Aggiungi prodotto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

