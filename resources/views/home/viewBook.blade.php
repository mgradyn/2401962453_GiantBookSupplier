@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="bg-secondary p-1">
                    <h1 class="text-light">Detail</h1>
                </div>
                <div class="body mb-5 row justify-content-center">
                    <div class="card m-2 mb-5" style="width: 90%;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/images/book/' . $book->image) }}"
                                    class="img-fluid rounded-start" alt="book image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ 'Title: ' . $book->title }}</h5>
                                    <p class="card-text">{{ 'Author: ' . $book->author }}</p>
                                    <p class="card-text">{{ 'Publisher: ' . $book->publisher()->first()->name }}</p>
                                    <p class="card-text">{{ 'Year: ' . $book->year }}</p>
                                    <p class="card-text">Synopsis:</p>
                                    <p class="card-text">{{ $book->synopsis }}</p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
