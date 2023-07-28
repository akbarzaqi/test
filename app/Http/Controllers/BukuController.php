<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penulis;
use Illuminate\Http\Request;
use App\Http\Requests\BukuRequest;
use Generator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::with(['penulis', 'genre'])->get();
        return view('pages.buku.index', [
            'buku' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::all();
        $penulis = Penulis::all();
        $buku = Buku::with(['penulis', 'genre']);
        return view('pages.buku.create', [
            'buku' => $buku,
            'penulis' => $penulis,
            'genre' => $genre
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BukuRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/buku', 'public');

        Buku::create($data);
        return redirect()->route('buku.index');
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
        $genre = Genre::all();
        $penulis = Penulis::all();
        $buku = Buku::findOrFail($id);
      

        return view('pages.buku.edit', [
           
            'buku' => $buku,
            'penulis' => $penulis,
            'genre' => $genre
           
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BukuRequest $request, string $id)
    {
        $data = $request->all();
        if ($request->file('photo')) {
            $data['photo'] = $request->file('photo')->store('assets/buku', 'public');
        }
        
        $item = Buku::findOrFail($id);

        $item->update($data);
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Buku::findOrFail($id);
        $data->delete();

        return redirect()->back();
        
    }
}
