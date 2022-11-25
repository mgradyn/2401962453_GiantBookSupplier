@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <x-page-name :pagename="$pagename" />
                <div class="body p-3 mb-5 row justify-content-center">
                    <div class="card">
                        <img src="{{ url('/images/book_store.jpeg') }}" class="card-img-top p-3"
                            style="height: 30rem; object-fit: cover;" alt="...">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h1 class="card-title mb-4">Store address</h1>
                                    <p class="card-text h5">{{ $store_address }}</p>
                                    <p class="card-text h5 ">{{ $store_komplek }}</p>
                                    <p class="card-text h5">{{ $store_town }}</p>
                                    <p class="card-text h5">{{ $store_country }}</p>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h1 class="card-title mb-4">Open Daily:</h1>
                                    <p class="card-text h5">{{ $schedule_time }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h1 class="card-title mb-4">Contact</h1>
                                    <p class="card-text h5">{{ 'Phone : ' . $phone }}</p>
                                    <p class="card-text h5">{{ 'Email : ' . $email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
