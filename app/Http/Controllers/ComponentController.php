<?php

namespace App\Http\Controllers;

use App\Models\BasicComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComponentController extends Controller
{
    public function homeIndex()
    {
        $dataHome = BasicComponent::select(['id', 'logo', 'home_name', 'home_description', 'home_image'])->first();
        return view('admin.home.index', compact('dataHome'));
    }
    public function homeEdit($id)
    {
        $dataHome = BasicComponent::select(['id', 'logo', 'home_name', 'home_description', 'home_image'])->first();
        return view('admin.home.update', compact('dataHome'));
    }
    public function aboutIndex()
    {
        $dataAbout = BasicComponent::select(['id', 'about_description', 'about_image', 'about_skill'])->first();
        return view('admin.about.index', compact('dataAbout'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateHome(Request $request, string $id)
    {
        $validate = $request->validate([
            'home_name' => 'required',
            'home_description' => 'required',
            'logo' => 'required'
        ]);
        $foto_lama = BasicComponent::select('home_image')->where('id', $id)->first();

        $update = BasicComponent::where('id', $id)->first();
        $update['logo'] = $request->logo;
        $update['home_name'] = $request->home_name;
        $update['home_description'] = $request->home_description;
        if ($request->hasFile('home_image')) {
            Storage::disk('public')->delete($foto_lama->home_image);
            $filename = 'home_image.' . $request->home_image->getClientOriginalExtension();
            $path = $request->home_image->storeAs('images', $filename, 'public');
            $update['home_image'] = $path;
        }

        $update->save();

        if ($update !== null || !$update) {
            return redirect()->back()->with('success', 'Berhasil mengubah component home');
        } else {
            return redirect()->back()->with('error', 'Gagal mengubah component home');
        }
    }

    public function updateAbout(Request $request, string $id)
    {
        $validate = $request->validate([
            'about_skill' => 'required',
            'about_description' => 'required',
        ]);
        $foto_lama = BasicComponent::select(['about_image'])->where('id', $id)->first();

        $update = BasicComponent::where('id', $id)->first();
        $update['about_skill'] = $request->about_skill;
        $update['about_description'] = $request->about_description;
        if ($request->hasFile('about_image')) {
            Storage::disk('public')->delete($foto_lama->about_image);
            $filename = 'about_image.' . $request->about_image->getClientOriginalExtension();
            $path = $request->about_image->storeAs('images', $filename, 'public');
            $update['about_image'] = $path;
        }

        $update->save();

        if ($update !== null || !$update) {
            return redirect()->back()->with('success', 'Berhasil mengubah component about');
        } else {
            return redirect()->back()->with('error', 'Gagal mengubah component about');
        }
    }
}
