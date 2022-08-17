<?php

namespace App\Http\Controllers;

use App\Models\Configurasi;
use App\Http\Requests\StoreConfigurasiRequest;
use App\Http\Requests\UpdateConfigurasiRequest;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ConfigurasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configurasis = Configurasi::all();
        return Inertia::render('configurasi/Index', [
            'configurasis' => $configurasis
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConfigurasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConfigurasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Configurasi  $configurasi
     * @return \Illuminate\Http\Response
     */
    public function show(Configurasi $configurasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Configurasi  $configurasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Configurasi $configurasi)
    {
        return Inertia::render('configurasi/Update', [
            'configurasi' => $configurasi
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConfigurasiRequest  $request
     * @param  \App\Models\Configurasi  $configurasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConfigurasiRequest $request, Configurasi $configurasi)
    {
        $validatedData = $request->validate([
            'value' => 'required'
        ]);

        $configurasi->update($validatedData);

        return redirect('/configurasi')->with('message', 'Berhasil Mengupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Configurasi  $configurasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configurasi $configurasi)
    {
        //
    }

    public function get_configurasi(){
        $configurasis = Configurasi::all();
        return response()->json([
            'configurasis' => $configurasis
        ], 200);
    }
}
