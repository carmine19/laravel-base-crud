@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Dettaglio vestito {{ $products->id }}</h1>
                <ul>
                    <li>Nome: {{ $products->name }}</li>
                    <li>Prezzo: {{ $products->color }}</li>
                    <li>Descrizione: {{ $products->size }}</li>
                    <li>Stagione: {{ $products->price }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
