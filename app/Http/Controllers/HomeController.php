<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {
        $page_name = "Book List";
        $books = Book::all();
        return view('home.index', ['books' => $books, 'page_name' => $page_name]);
    }

    public function category($name)
    {
        $category = Category::where('name', $name)->first();
        if ($category)
        {
            $category_books = $category->bookCategories()->get();

            if (count($category_books))
            {
                $book_ids = [];
                foreach($category_books as $category_book)
                {
                    $book_ids[] = $category_book->book()->first()->id;
                }
                $books = Book::whereIn('id', $book_ids)->get();
                return view('home.index', ['page_name' => $name,
                'books' => $books]);
            }
        }
        return redirect(route('home'));
    }

    public function viewBook($id)
    {
        $page_name = "Detail";
        $book = Book::find($id);
        if ($book){
            return view('home.index', ['book' => $book, 'page_name' => $page_name]);
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
