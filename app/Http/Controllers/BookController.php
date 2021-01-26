<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::query()->with('author');

        $order = $request->order ?? 'desc';

        if ($request->has('sort')) {
            $books->orderBy($request->sort, $order);
            $order = $order === 'desc' ? 'asc' : 'desc';
        }
        return view('welcome', ['books' => $books->paginate(20)->withQueryString(), 'order' => $order]);
    }

    public function book(Book $book)
    {
        return view('book', ['book' => $book]);
    }
}
