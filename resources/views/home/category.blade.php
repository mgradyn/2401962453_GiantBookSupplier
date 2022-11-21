@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="bg-secondary p-1">
                    <h1 class="text-light">{{ $category_name }}</h1>
                </div>
                <div class="row p-4 mb-5 justify-content-center">
                    @foreach ($category_books as $category_book)
                        <div class="card m-2" style="width: 18rem;">
                            <img src="{{ asset('storage/images/book/' . $category_book->book()->first()->image) }}"
                                class="card-img-top" alt="book image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $category_book->book()->first()->title }}</h5>
                                <p class="card-text mb-0">by</p>
                                <p class="card-text">{{ $category_book->book()->first()->author }}</p>
                                <a href="{{ route('view-book', ['id' => $category_book->book()->first()->id]) }}"
                                    class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
