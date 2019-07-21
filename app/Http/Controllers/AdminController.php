<?php

namespace App\Http\Controllers;

use App\Books;
use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $books = Books::orderBy('id', 'desc')->with('category')->get();
        return view('admin.books.index', compact('books'));
    }

    function category()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    function add()
    {
        return view('admin.category.add');
    }

    public function addSave(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'


        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.category');
    }
}
