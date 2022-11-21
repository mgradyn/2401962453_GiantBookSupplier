<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $categories = Category::with(['products' => function($query) {
        //     $query->filter(request('search'));
        // }])->get();

        return view('home.index');
    }

    public function category()
    {
        // $categories = Category::with(['products' => function($query) {
        //     $query->filter(request('search'));
        // }])->get();

        return view('home.index');
    }

    public function viewBook()
    {
        // $categories = Category::with(['products' => function($query) {
        //     $query->filter(request('search'));
        // }])->get();

        return view('home.index');
    }

    public function contact()
    {
        $store_address = "Jalan Pembangunan Baru Raya,";
        $store_komplek = "Kompleks Pertokoan Emerald Blok III/12";
        $store_town = "Bintaro, Tangerang Selatan";
        $store_country = "Indonesia";
        $schedule_time = "08.00 - 20.00";
        $phone = "021-08899776655";
        $email = "happybookstore@happy.com";

        return view('home.contact', ['store_address' => $store_address, 
        'schedule_time' => $schedule_time, 'phone' => $phone, 
        'email' => $email]);
    }
}
