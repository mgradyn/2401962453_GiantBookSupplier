<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('home.index', ['books' => $books]);
    }

    public function category()
    {
        // $categories = Category::with(['products' => function($query) {
        //     $query->filter(request('search'));
        // }])->get();

        return view('home.index');
    }

    public function viewBook($id)
    {
        $book = Book::find($id);
        if ($book){
            return view('home.viewBook', ['book' => $book]);
        }

        return redirect(route('home'));
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
        'store_komplek' => $store_komplek,
        'store_town' => $store_town,
        'store_country' => $store_country,
        'schedule_time' => $schedule_time, 'phone' => $phone, 
        'email' => $email]);
    }
}
