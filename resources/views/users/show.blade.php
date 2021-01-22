@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                @extends('partials.success-error-message')
                <h1>{{$users->name}}</h1>
                <ul>
                    <li>ID: {{ $users->id }}</li>
                    <li>Email: {{ $users->email }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
