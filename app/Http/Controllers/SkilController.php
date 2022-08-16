<?php

namespace App\Http\Controllers;

use App\Models\Skil;
use App\Http\Requests\StoreSkilRequest;
use App\Http\Requests\UpdateSkilRequest;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        Skil::create([
            'nama' => $request->nama,
            'logo' => $request->file('logo')->store('logo')
        ]);

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
    public function update(Request $request, Skil $skil, $id)
    {
        $validatedDate = $request->validate([
            'nama' => 'required',
            'logo' => 'mimes:jpeg,jpg,png|max:10000'
        ]);

        $skil = Skil::findOrFail($id);

        if($request->file('logo')){
            if($skil->logo){
                Storage::delete($skil->logo);
            }
            $validatedDate['logo'] = $request->file('logo')->store('logo');
        }

        $skil->update($validatedDate);

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
        if($skil->logo){
            Storage::delete($skil->logo);
        }
        $skil->delete();

        return redirect()->back()->with('message', 'Berhasil Menghapus skill');
    }

    public function get_api(){
        $skills = Skil::orderBy('created_at', 'desc')->get();
        return response()->json($skills, 200);
    }
}
