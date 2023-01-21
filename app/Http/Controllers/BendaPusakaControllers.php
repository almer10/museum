<?php

namespace App\Http\Controllers;

use App\Http\Requests\BendaPusakaRequest;
use App\Models\BendaPusaka;

class BendaPusakaControllers extends Controller
{
    public function create() 
    {
        $category = BendaPusaka::CATEGORY;
        return view('tambah-pusaka', [
            'category' => $category,
        ]);
    }

    public function store(BendaPusakaRequest $request, BendaPusaka $bendaPusaka)
    {
        $bendaPusaka->fill($request->only($bendaPusaka->offsetGet('fillable')))
            ->saveWithFile();

        return redirect()->route('dashboard');
    }

    public function show(BendaPusaka $bendaPusaka)
    {
        return view('detail-informasi', [
            'nama' => $bendaPusaka->nama_benda,
            'deskripsi' => $bendaPusaka->deskripsi,
            'foto' => $bendaPusaka->foto,
        ]);
    }

    public function edit(BendaPusaka $bendaPusaka)
    {
        $category = BendaPusaka::CATEGORY;
        return view('edit-pusaka', [
            'bendaPusaka' => $bendaPusaka,
            'category' => $category,
        ]);
    }

    public function update(BendaPusakaRequest $request, BendaPusaka $bendaPusaka)
    {
        $bendaPusaka->fill($request->only($bendaPusaka->offsetGet('fillable')))
            ->updateWithFile();

        return redirect()->route('dashboard');
    }

    public function delete(BendaPusaka $bendaPusaka)
    {
        $bendaPusaka->delete();
        return redirect()->route('dashboard');
    }
}
