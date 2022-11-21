@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="bg-secondary p-1">
                    <h1 class="text-light">Book List</h1>
                </div>
                <div class="row p-4 mb-5 justify-content-center">
                    @foreach ($books as $book)
                        <div class="card m-2" style="width: 18rem;">
                            <img src="{{ asset('storage/images/book/' . $book->image) }}" class="card-img-top"
                                alt="book image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->title }}</h5>
                                <p class="card-text mb-0">by</p>
                                <p class="card-text">{{ $book->author }}</p>
                                <a href="{{ route('view-book', ['id' => $book->id]) }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
