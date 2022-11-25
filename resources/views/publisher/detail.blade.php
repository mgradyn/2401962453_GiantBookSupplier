@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">

                <div class="bg-light shadow-sm p-4 rounded-4">
                    <h1 class="text-dark mb-4">{{ $publisher->name }}</h1>
                    <div class="bg-dark shadow-sm p-4 rounded-4">
                        <h1 class="text-light">{{ 'Address: ' . $publisher->address }}</h1>
                        <h1 class="text-light">{{ 'Phone: ' . $publisher->phone }}</h1>
                        <h1 class="text-light">{{ 'Email: ' . $publisher->email }}</h1>
                    </div>

                </div>
                <div class="row p-4 mb-5 justify-content-center">
                    @foreach ($books as $book)
                        <x-card :book="$book" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
