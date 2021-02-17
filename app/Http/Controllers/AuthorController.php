<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{   
    public function index(Request $request)
    {
        $authors = Author::query()->with('books');

        $order = $request->order ?? 'desc';

        if ($request->has('sort')) {
            $authors->orderBy($request->sort, $order);
            $order = $order === 'desc' ? 'asc' : 'desc';
        }
        return view('welcome', ['author' => $authors->paginate(20)->withQueryString(), 'order' => $order]);
    }

    public function author(Author $author)
    {
        return view('author', ['author' => $author]);
    }
}
