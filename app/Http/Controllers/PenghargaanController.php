<?php

namespace App\Http\Controllers;

use App\Models\Penghargaan;
use App\Http\Requests\StorePenghargaanRequest;
use App\Http\Requests\UpdatePenghargaanRequest;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PenghargaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penghargaans = Penghargaan::latest()->get();
        return Inertia::render('Penghargaan/Index', [
            'penghargaans' => $penghargaans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Penghargaan/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenghargaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenghargaanRequest $request)
    {
        Penghargaan::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori['value'],
            'deskripsi' => $request->deskripsi,
            'image' => $request->file('image')->store('fotoPenghargaan')
        ]);

        return Redirect::route('penghargaan.index')->with('message', 'Berhasil Menambahkan ' . $request->kategori['value']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penghargaan  $penghargaan
     * @return \Illuminate\Http\Response
     */
    public function show(Penghargaan $penghargaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penghargaan  $penghargaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penghargaan $penghargaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenghargaanRequest  $request
     * @param  \App\Models\Penghargaan  $penghargaan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenghargaanRequest $request, Penghargaan $penghargaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penghargaan  $penghargaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penghargaan $penghargaan)
    {
        Storage::delete($penghargaan->nama);
        Penghargaan::destroy($penghargaan->id);

        return redirect()->back()->with('message', 'Berhasil terhapus');
    }

    public function get_achivement(){
        $achivements = Penghargaan::where('kategori', 'achivement')->latest()->paginate(6);
        return response()->json($achivements, 200);
    }

    public function get_sertifikat(){
        $sertifikat = Penghargaan::where('kategori', 'sertifikat')->latest()->paginate(6);
        return response()->json($sertifikat, 200);
    }
}
