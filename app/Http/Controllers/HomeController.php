<?php

namespace App\Http\Controllers;

use App\Books;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $categories = Category::all();
        $books = Books::orderBy('id', 'desc')->with('category')->get();
        return view('index.index', compact('categories', 'books'));
    }

    public function show($id)
    {
        $books = Books::find($id);
        return view('show', compact('books'));
    }
}
