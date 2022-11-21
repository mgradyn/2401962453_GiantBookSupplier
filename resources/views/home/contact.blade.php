@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="bg-secondary p-1">
                    <h1 class="text-light">Contact</h1>
                </div>
                <div class="store-address mt-2">
                    <h1 class="mt-2">Store address</h1>
                    <p class="lead">{{ $store_address }}</p>
                    <p class="lead">{{ $store_komplek }}</p>
                    <p class="lead">{{ $store_town }}</p>
                    <p class="lead">{{ $store_country }}</p>
                </div>
                <div class="schedule mt-2">
                    <h1 class="mt-2">Open Daily:</h1>
                    <p class="lead">{{ $schedule_time }}</p>
                </div>
                <div class="contact mt-2">
                    <h1 class="mt-2">Contact</h1>
                    <p class="lead">{{ 'Phone : ' . $phone }}</p>
                    <p class="lead">{{ 'Email : ' . $email }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection
