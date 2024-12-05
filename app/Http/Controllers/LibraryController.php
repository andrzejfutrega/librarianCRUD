<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $libraries = Library::all();
        return view('libraries.index', compact('libraries'));
    }

    public function create()
    {
        return view('libraries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'established_year' => 'required|integer|min:1900|max:'.date('Y'),
        ]);

        Library::create($request->all());

        return redirect()->route('libraries.index')
                         ->with('success', 'Library created successfully.');
    }

    public function show(Library $library)
    {
        return view('libraries.show', compact('library'));
    }

    public function edit(Library $library)
    {
        return view('libraries.edit', compact('library'));
    }

    public function update(Request $request, Library $library)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'established_year' => 'required|integer|min:1900|max:'.date('Y'),
        ]);

        $library->update($request->all());

        return redirect()->route('libraries.index')
                         ->with('success', 'Library updated successfully.');
    }

    public function destroy(Library $library)
    {
        $library->delete();
        return redirect()->route('libraries.index')
                         ->with('success', 'Library deleted successfully.');
    }
}

