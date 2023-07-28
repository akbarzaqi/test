<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;
use App\Http\Requests\PenulisRequest;
use Yajra\DataTables\Facades\DataTables;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Penulis::all();

        
        return view('pages.penulis.index', [
            'penulis' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.penulis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PenulisRequest $request)
    {
        $penulis = $request->all();
        Penulis::create($penulis);

        return redirect()->route('penulis.index');
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
    public function edit( $id)
    {
        $data = Penulis::findOrFail($id);
        return view('pages.penulis.edit', [
            'penulis' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PenulisRequest $request, string $id)
    {
        $data = $request->all();
        $item = Penulis::findOrFail($id);

        $item->update($data);
        return redirect()->route('penulis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Penulis::findOrFail($id);
        $item->delete();

        return redirect()->back();

    }
}
