<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index()
    {
        $page_name = "Publisher";
        $publishers = Publisher::all();
        return view('publisher.index', ['publishers' => $publishers, 'pagename' => $page_name]);
    }

    public function detail($id)
    {
        $publisher = Publisher::find($id);
        if ($publisher)
        {
            $books = $publisher->books()->get();
            return view('publisher.detail', ['publisher' => $publisher, 'books' => $books]);
        }
        return redirect(route('publisher'));
    }
}
