@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <x-page-name :pagename="$pagename" />
                <div class="body p-3 mb-5 row justify-content-center">
                    @foreach ($publishers as $publisher)
                        <div class="card m-2" style="width: 18rem;">
                            <img src="{{ asset('storage/images/publisher/' . $publisher->image) }}" class="card-img-top"
                                alt="book image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $publisher->name }}</h5>
                                <p class="card-text mb-0">Address:</p>
                                <p class="card-text">{{ $publisher->address }}</p>
                                <a href="{{ route('publisher_detail', ['id' => $publisher->id]) }}"
                                    class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
