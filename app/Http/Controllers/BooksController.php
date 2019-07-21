<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Books;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{

    function add()
    {

        $categories = Category::all();
        return view('admin.books.add', compact('categories'));
    }


    function addSave(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'language' => 'required',
            'year' => 'required',
            'images' => 'required',
            'files' => 'required',
            'category_id' => 'required'
        ]);

        $fileNameToImage = null;
        if ($request->hasFile('images')) {
            $fileNameWithExt = $request->file('images')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('images')->getClientOriginalExtension();
            $fileNameToImage = $filename . '_' . time() . '.' . $extension;

            Storage::disk('images')->put($fileNameToImage, file_get_contents($request->file('images')));
        }

        $fileNameToFile = null;
        if ($request->hasFile('files')) {
            $fileNameWithExt = $request->file('files')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('files')->getClientOriginalExtension();
            $fileNameToFile = $filename . '_' . time() . '.' . $extension;

            Storage::disk('files')->put($fileNameToFile, file_get_contents($request->file('files')));
        }
        Books::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author' => $request->author,
            'language' => $request->language,
            'year' => $request->year,
            'images' => $fileNameToImage,
            'files' => $fileNameToFile

        ]);
        $books = Books::orderBy('id', 'desc')->paginate(3)->with('category')->get();
        return view('admin.books.index', compact('books'));
    }

    function destroy($id)
    {
        $books = Books::find($id);


        return $books;
    }

}
