<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function project()
    {
        $projects = Portofolio::all();
        return view('project', compact('projects'));
    }
    
    public function createPortofolio()
    {
        return view('tambah');
    }

    public function index()
    {
        $projects = Portofolio::all();
        return view('index')->with('projects', $projects);
    }

    public function simpan(Request $request)
    {

        $Portofolio = new Portofolio();
        $Portofolio->project = $request->input("project");
        $Portofolio->teknologi = $request->input("teknologi");
        $Portofolio->tugas = $request->input("tugas");
        $Portofolio->save();
        return redirect()->route('project')->with('success', 'Data berhasil disimpan');
    }

    public function hapus($id)
{
    $portofolio = Portofolio::findOrFail($id);
    $portofolio->delete();

    return redirect()->route('project')->with('success', 'Data berhasil dihapus');
}

public function update(Request $request, $id)
{
    $project = Portofolio::find($id);
    $project->project = $request->project;
    $project->save();

    return redirect()->route('project')->with('success', 'Data berhasil di update');
}

}