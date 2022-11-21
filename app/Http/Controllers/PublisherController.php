<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        return view('publisher.index', ['publishers' => $publishers]);
    }

    public function detail($id)
    {
        $publisher = Publisher::find($id);
        $books = $publisher->books()->get();
        if ($publisher)
        {
            return view('publisher.detail', ['publisher' => $publisher, 'books' => $books]);
        }
        return redirect(route('publisher'));
    }
}
