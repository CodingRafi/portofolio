<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skil;
use App\Models\Koleksi;
use App\Models\Foto;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->get();

        $skills = Skil::getSkills($projects);

        $koleksis = Koleksi::koleksis($projects);
        $fotos = Foto::foto($koleksis);

        return Inertia::render('Project/Index', [
            'projects' => $projects,
            'fotos' => $fotos,
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
        $skils = Skil::all();
        return Inertia::render('Project/Create', [
            'skils' => $skils
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $project = Project::create([
            'nama' => $request->nama,
            'role' => $request->role,
            'deskripsi' => $request->deskripsi,
            'link_github' => $request->link_github ?? '',
            'link_website' => $request->link_website ?? '',
        ]);

        foreach ($request->skills as $key => $skill) {
            \DB::table('project_skil')->insert([
                'skil_id' => $skill['value'],
                'project_id' => $project->id
            ]);
        }

        $koleksi = Koleksi::create([
            'project_id' => $project->id
        ]);

        Foto::UploadSigleFoto($request->utama, $koleksi, 'utama');
        Foto::uploadFoto($request->preview, $koleksi, 'preview');

        return Redirect::route('projects.index')->with('message', 'Berhasil Menambahkan Project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {   
        $koleksi = $project->koleksi;
        if(count($koleksi) > 0){
            Foto::deleteFoto($koleksi[0]->foto);
            $koleksi[0]->delete();
        }
        Skil::deleteSkills($project);
        $project->delete();

        return redirect()->back()->with('message', 'Berhasil Menghapus Project');
    }

    public function get_project(){
        $projects = Project::latest()->paginate(6);

        $skills = Skil::getSkills($projects);

        $koleksis = Koleksi::koleksis($projects);
        $fotos = Foto::foto($koleksis);
        
        return response()->json([
            'projects' => $projects,
            'skills' => $skills,
            'fotos' => $fotos,
        ], 200);
    }
}
