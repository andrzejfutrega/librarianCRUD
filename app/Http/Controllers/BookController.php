<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Library;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $libraries = Library::all();
        return view('books.create', compact('libraries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publication_year' => 'required|integer|min:1900|max:'.date('Y'),
            'genre' => 'required|string|max:255',
            'library_id' => 'required|exists:libraries,id',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
                         ->with('success', 'Book created successfully.');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $libraries = Library::all();
        return view('books.edit', compact('book', 'libraries'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publication_year' => 'required|integer|min:1900|max:'.date('Y'),
            'genre' => 'required|string|max:255',
            'library_id' => 'required|exists:libraries,id',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
                         ->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')
                         ->with('success', 'Book deleted successfully.');
    }
}
