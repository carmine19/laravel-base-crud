
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Modifica prodotto </h1>
                <form method="POST" action="{{ route('products.update', ['product' => $products->id]) }}">
                    @csrf <!--  token obbligatorio per passare i dati -->
                    @method('PUT') <!-- quando passiamo in un form dati in put,patch dobbiamo inserire
                                             questo metodo in quanto i dati in un form possono essere solo
                                             in post o get-->
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name" class="form-control" value="{{$products->name}}">
                    </div>
                    <div class="form-group">
                        <label>Colore</label>
                        <input type="text" name="color" class="form-control" value="{{$products->color}}">
                    </div>
                    <div class="form-group">
                        <label>Taglia</label>
                        <input type="text" name="size" class="form-control" value="{{$products->size}}">
                    </div>
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="number" name="price" class="form-control" value="{{$products->price}}">
                    </div>
                    <div class="col-lg-12 mt-5">
                        <button href="#" class="btn btn-info" type="submit">Modifica prodotto</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

