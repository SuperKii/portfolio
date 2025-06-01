<?php

namespace App\Http\Controllers;

use App\Models\ProjectsComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProjectsComponent::all();
        return view('admin.projects.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'link_github' => 'required',
            'link_web' => 'required'
        ]);

        $store = new ProjectsComponent();
        $store['title'] = $request->title;
        $store['description'] = $request->description;
        if ($request->hasFile('image')) {
            $filename = time() .'.'. $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('projects', $filename, 'public');
            $store['image'] = $path;
        }
        $store['link_github'] = $request->title;
        $store['link_web'] = $request->title;
        $store->save();

        if ($store != null) {
            return redirect()->route('projectsIndex')->with('success', 'Berhasil menambah project');
        } else {
            return redirect()->route('projectsIndex')->with('error', 'Gagal menambah project');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataProjects = ProjectsComponent::where('id', $id)->first();
        return view('admin.projects.show', compact('dataProjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataProjects = ProjectsComponent::where('id', $id)->first();
        return view('admin.projects.update', compact('dataProjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link_github' => 'required',
            'link_web' => 'required',
        ]);

        $update = ProjectsComponent::where('id', $id)->first();
        $update['title'] = $request->title;
        $update['description'] = $request->title;
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($update->image);
            $filename = time() .'.'. $request->image->getClientOriginalExtension();
            $path = $request->image->storeAs('projects', $filename, 'public');
            $update['image'] = $path;
        }
        $update['link_github'] = $request->title;
        $update['link_web'] = $request->title;
        $update->save();

        if (!$update) {
            return redirect()->route('projectsIndex')->with('success', 'Berhasil mengubah project');
        } else {
            return redirect()->route('projectsIndex')->with('error', 'Gagal mengubah project');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus_foto = ProjectsComponent::where('id', $id)->first();
        Storage::disk('public')->delete($hapus_foto->image);


        $delete = ProjectsComponent::where('id', $id)->delete();
        if (!$delete) {
            return redirect()->back()->with('success', 'Berhasil menghapus projects');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus projects');
        }
    }
}
