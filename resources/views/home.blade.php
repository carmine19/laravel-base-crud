
@extends('layouts.app')

@section('content')

<h1>test</h1>

    @foreach($products as $ele)
        <p>{{$ele->name}}</p>
    @endforeach
@endsection
