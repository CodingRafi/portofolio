<?php

namespace App\Http\Controllers;

use App\Models\Skil;
use App\Http\Requests\StoreSkilRequest;
use App\Http\Requests\UpdateSkilRequest;
use Inertia\Inertia;

class SkilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skil::orderBy('created_at', 'desc')->get();
        return Inertia::render('Skill/Index', [
            'skills' => $skills
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
     * @param  \App\Http\Requests\StoreSkilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkilRequest $request)
    {
        Skil::create($request->all());

        return redirect()->back()->with('message', 'Berhasil Menambahkan Skill');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skil  $skil
     * @return \Illuminate\Http\Response
     */
    public function show(Skil $skil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skil  $skil
     * @return \Illuminate\Http\Response
     */
    public function edit(Skil $skil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSkilRequest  $request
     * @param  \App\Models\Skil  $skil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkilRequest $request, Skil $skil, $id)
    {
        $skil = Skil::findOrFail($id);

        $skil->update($request->all());

        return redirect()->back()->with('message', 'Berhasil Mengupdate Skill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skil  $skil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skil $skil, $id)
    {
        $skil = Skil::findOrFail($id);
        $skil->delete();

        return redirect()->back()->with('message', 'Berhasil Menghapus skill');
    }
}
