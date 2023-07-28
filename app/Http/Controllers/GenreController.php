<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\GenreRequest;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Genre::all();
        return view('pages.genre.index', [
            'genre' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenreRequest $request)
    {
        $data = $request->all();
        Genre::create($data);
        return redirect()->route('genre.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Genre::findOrFail($id);
        return view('pages.genre.edit', [
            'genre' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenreRequest $request, string $id)
    {
        $data = $request->all();
        $item = Genre::findOrFail($id);
        $item->update($data);

        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Genre::findOrFail($id);
        $item->delete();

        return redirect()->back();
    }
}
